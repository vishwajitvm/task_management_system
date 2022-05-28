<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //ADMIN LOGOUT
    public function AdminLogOut() {
        Auth::logout() ;
        return redirect()->route('login') ;
    }
}
