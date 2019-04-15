<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
