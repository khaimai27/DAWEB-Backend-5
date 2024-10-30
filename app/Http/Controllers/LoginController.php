<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    public function Login()
    {
        return view('login');
    }
    public function hdLogin(Request $rq)
    {
        try {

            $credentials = $rq->only('email', 'password');

            $remember = $rq->has('remember');


            if (Admin::attemptLogin($credentials['email'], $credentials['password'], $remember)) {

                // if (Auth::user()->roles === 1) {
                //     return redirect()->route('statistical');
                // } else if (Auth::user()->roles === 3) {
                //     return redirect()->route('warehouse.list');
                // } else {
                //     return redirect()->route('invoice.list');
                // }
                return view('master');
            } else {
                return back()->withInput()->with(['Error' => 'Email hoặc mật khẩu không đúng!']);
            }
        } catch (Exception $e) {

            return back()->withInput()->with(['Error' => 'Đăng nhập không thành công!']);
        }

    }
}
