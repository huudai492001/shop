<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        $products = Product::get();
        $new_products = Product::limit(6)->latest()->get();
        return view('front.home', compact('products', 'new_products'));
    }
    public function specials_offer(){
        return view('front.specialsOffer');
    }
    public function delivery(){
        return view('front.delivery');
    }
    public function contact(){
        return view('front.contact');
    }
    public function cart(){
        return view('front.cart');
    }
    public function productView(Request $request){
        $id = $request->id;
        $product = Product::where('id' , $id)->with('ProductDetail')->first();
        $category_id = $product->category_id;
        // hiện ra các sản phẩm có cùng chung category_id
        $related_products = Product::where('category_id', $category_id)->latest()->get();
        return view('front.productView', compact('product', 'related_products'));
    }

}
