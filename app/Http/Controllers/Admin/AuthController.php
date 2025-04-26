<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(Request $request): View
    {
        return view('admin.auth.login');
    }

    public function forgetPassword(): View
    {
        return view('admin.auth.forgot-password');
    }

}
