<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    public function index()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // User is not authenticated, redirect to login or any other page
            return redirect()->route('login')->with('error', 'Please log in to view your cart.');
        }

        // Retrieve the maximum order ID for the authenticated user
        $maxOrderId = Order::where('user_id', Auth::id())->max('id');

        // If no order exists for the user, set total price to 0
        $totalPrice = 0;

        if ($maxOrderId) {
            // Retrieve the total price from the order with the maximum ID
            $order = Order::find($maxOrderId);
            $totalPrice = $order->total_price;
        }

        // Retrieve cart items with product details for the order with the maximum ID
        $cartItems = [];
        if ($maxOrderId) {
            $cartItems = OrderDetail::with('product')->where('order_id', $maxOrderId)->get();
        }

        // Pass the total price and cart items to the view
        return view('templates.cartpage', [
            'totalPrice' => $totalPrice,
            'cartItems' => $cartItems,
        ]);
    }


    public function removeItem($id)
    {
        // Assuming OrderDetail is the model for your cart items
        $cartItem = OrderDetail::find($id);
        if ($cartItem) {
            // Get the order associated with the cart item
            $order = $cartItem->order;

            // Update the total_price of the order
            $order->total_price -= ($cartItem->product->price * $cartItem->quantity);
            $order->save();

            // Delete the cart item
            $cartItem->delete();

            return redirect()->back()->with('success', 'Item removed successfully');
        }
        return redirect()->back()->with('error', 'Item not found');
    }

}
