<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function getIndex(){
        if(!Auth::check()){
            return redirect('login')->with('message','Bạn phải đăng nhập');
        }
        else
            return view('admin.layout');
    }
    
    public function getLogin(){
        return view('login.login');
    }

    public function postLogin(Request $request ){
        $arr = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255'
        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập email hợp lệ',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ]);
        $arr = [
            'email' =>$request->email,
            'password' =>$request->password,
        ];
        if(Auth::attempt($arr)){
            return redirect('admin');
        }
        else
        {
            return view('login.login');
        }
    }
    public function getlogout(){
        Auth::logout();
        return redirect('login');
    }
}
