<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Cart;
use Session;


class ProductController extends Controller
{
    public function getIndex(){
    	$products = Products::all();
    	return view('index',['products'=>$products]);
    }
    public function getAddToCart(Request $request, $id){
    	$product = Products::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product,$product->id);

    	$request->session()->put('cart', $cart);

    	return redirect('/');
    }
    public function getCart(){
    	if(!Session::has('cart')){
    		return view('shop.shopping-cart',['products' => null]);
    	}
    	$oldCart = Session::put('cart');
    	$cart = new Cart($oldCart);
    	return view('shop.shopping-cart', ['products' => $cart->items,'totalPrice'=> $cart->totalPrice]);
    }
}
