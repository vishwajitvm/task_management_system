<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\User ;

class AuthCheckController extends Controller
{
    public function loginRedirects() {
        $role = Auth::user()->usertype ;
        if($role == 'admin') {
            return redirect('/dashboard') ;
        }
        elseif($role == 'supervisor') {
            return redirect('/supervisordashboard') ;
        }
        elseif($role == 'teamleader') {
            return redirect('/teamleaderdashboard') ;
        }
        elseif($role == 'employee') {
            return redirect('/employeedashboard') ;
        }
        else{
            return redirect('userdashboard') ;
        }

    }
}
