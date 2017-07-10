<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;
use Crud\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::OrderBy('id', 'DESC')->paginate();
    	return view('products.index', compact('products'));
    }
}
