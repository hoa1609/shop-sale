<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminController extends Controller {

    public function AuthLogin(Request $request){
        if (Auth::check()) {
            return redirect()->route('auth.dashboard');
        } else {
            return redirect()->route('auth.admin');
        }
    }

    public function index(){
        return view('admin-login');
    }
    
    public function show_dashboard() {
        return view('admin.dashboard');
    }


    public function dashboard(AuthRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('auth.dashboard')->with('success', 'Đăng nhập thành công.');
        }
        return redirect()->route('auth.admin')->with('error', 'Email hoặc mật khẩu không chính xác');
    }  

    public function logout()
    {
        // Auth::logout();
        return redirect()->route('auth.login');
    }
}
