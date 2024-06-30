<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;

class ProductDetailController extends Controller
{

    public function index()
    {
        abort(404, 'Page not found');
    }
    
    public function show($id)
    {
        $product = ProductDetail::findOrFail($id);
        return view('templates.product-detail', compact('product'));
        //echo $product->image_url;
    }
}   