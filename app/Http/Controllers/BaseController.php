<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

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

    public function user_login()
    {
        return view('front.login');
    }
    public function check_login(Request $request){
        $data = array(
              'email' => $request->email,
                'password' => $request->password,
        );
        if(Auth::attempt($data)){
            return redirect()->route('home' );
        }else{
            return back()->withErrors(['message'=>'Email or Password Error']);
        }
    }

//    =============CREATE USER REGISTER=============
    public function user_store(Request $request){
        $data = array(
          'name' => $request-> first_name.''.$request->last_name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
            'role' =>'user'
        );
        $user = User::create($data);
        return redirect()->back()->with('success', 'User Created SUCCESS');
    }
    public function log_out(){
        Auth::logout();
        return redirect()->route('user_login');
    }
//    public function testhead(){
//        $data = User::get();
//        return view('front.layout.header', compact('data'));
//    }


}
