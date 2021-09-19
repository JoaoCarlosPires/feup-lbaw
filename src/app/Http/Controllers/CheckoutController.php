<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CheckoutController extends Controller
{

    public function home() {
        return redirect('checkout');
    }

    public function index() {
      $product = Product::all();
      return view('pages/checkout', compact('product'));
    }


}
