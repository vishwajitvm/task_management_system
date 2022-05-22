<?php

use Illuminate\Support\Facades\Route;
//GoogleAuth
use App\Http\Controllers\Auth\GoogleController ;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return view('admin_dashboard.index');

    })->name('dashboard');
});

//AUTHENTICATIONS {GOOGLE}
Route::get('auth/google' , [GoogleController::class , 'RedirectToGoogle'])->name('auth.google') ;

//REDIRECTION AUTHENTICATION {google}
Route::get('auth/google/callback' , [GoogleController::class , 'HandleGoogleCallBack']) ;

