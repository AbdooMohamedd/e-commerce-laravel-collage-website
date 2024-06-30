<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;


class CartPageController extends Controller
{
    // CartPageController.php
    public function index() {
        return view('templates.cartpage');
    }
    
        public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    
    public function addToCart(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Retrieve the authenticated user's ID
        $userId = auth()->user()->id;

        // Find the last open order for the user
        $lastOrder = Order::where('user_id', $userId)
            ->whereNull('checkout_at')
            ->latest()
            ->first();

        // If no open order exists, create a new one
        if (!$lastOrder) {
            $lastOrder = Order::create([
                'user_id' => $userId,
                'total_price' => 0,
            ]);
        }

        // Retrieve the product details based on the product ID
        $product = Product::findOrFail($request->product_id);

        // Add the product to the last open order as a new order detail
        $lastOrder->orderDetails()->create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
        ]);

        // Recalculate the total price for the last open order
        $this->updateTotalPrice($lastOrder);

        // Redirect the user to the cart page or send a response indicating success
        return redirect()->route('cart.page')->with('success', 'Product added to cart successfully!');
    }


    private function updateTotalPrice(Order $order)
    {
        // Eager load the 'product' relationship to avoid N+1 queries
        $order->load('orderDetails.product');

        // Calculate the total price for the order
        $totalPrice = $order->orderDetails->sum(function ($detail) {
            return $detail->quantity * $detail->product->price;
        });

        // Update the total price in the orders table
        $order->update(['total_price' => $totalPrice]);
    }


    public function checkout(Request $request)
        {
            // Retrieve the authenticated user's ID
            $userId = auth()->user()->id;

            // Find the open order for the user
            $order = Order::where('user_id', $userId)->whereNull('checkout_at')->first();

            // If there are items in the cart and an open order exists, use the existing open order
            if ($order && $order->orderDetails()->exists()) {
                // Update the checkout_at column with the current date and time
                $order->update(['checkout_at' => Carbon::now()]);
            }

            // If no open order exists or the cart is empty, start a new order
            $newOrder = Order::create([
                'user_id' => $userId,
                'total_price' => 0,
            ]);

            // Redirect the user to the cart page with an error message if the cart is empty
            return redirect()->route('cart.page')->with('error', 'No items in the cart.');
            $order->update(['checkout_at' => Carbon::now()]);

        }

}
