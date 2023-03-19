<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }
    public function destroy(Request $request){
        $id = $request->id;
        $user = User::where('id','=', $id)->delete();
        return redirect()->back()->with('success','User delete success' );
    }
}
