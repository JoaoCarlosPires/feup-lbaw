<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomepageController extends Controller
{

    public function home() {
        return redirect('homepage');
    }

    public function index() {
        $product = Product::all();
        return view('pages/homepage', compact('product'));
    }

}
