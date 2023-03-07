<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function login(){
//        // tạo mật khẩu thành chuỗi tokken
//        echo Hash::make('admin12345');
//        exit();
        return view('admin.login');
    }
    public function makeLogin(Request $request){
        $data = array(
             'email'=>$request->email,
             'password'=>$request->password,
            'role'=>'admin'
        );
        if(Auth::attempt($data)){
//            khi xác nhận tài khoản mật khẩu đúng sẽ đưa đến route admin.dashboard
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors(['message'=>'Email or password error']);
        }
                    //                  LOGIN 2
//        $this->validate($request, [
//            'email'  =>  'required|email:filter',
//            'password' =>'required']);
//        if(Auth::attempt([
//            'email' => $request->input('email'),
//            'password' => $request->input('password')],
////            $request->input('remember')
//        )){
//            return Redirect()->route('admin.makeLogin');
//        }
//        $request->session()->flash('error', 'Thông tin Email hoặc mật khẩu không chính xác!');
//        // $request->session()->flash('error', 'Thông tin Emmail hoặc mật khẩu không chính xác!');
//        // Sesstion::flash('error', 'Thông tin Emmail hoặc mật khẩu không chính xác!');
//        // session()->flash('error', 'email hoặc mật khẩu không chính xác');
//        return Redirect()-> back();
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
