<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function getIndex(){
    	$products = Products::all();
    	return view('index',['products'=>$products]);
    }
}
