<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    function getIndex(){
    	$products = Product::all();
    	//dd($products);
    	return view('shop.index', compact('products'));
    }
}
