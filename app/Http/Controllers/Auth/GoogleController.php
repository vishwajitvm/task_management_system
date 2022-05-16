<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite ;
use Illuminate\Support\Facades\Auth ;
use Exception ;
use App\Models\User ;
use Illuminate\Support\Facades\Hash ;

class GoogleController extends Controller
{
    //redirect to google function
    public function RedirectToGoogle() {
        return Socialite::driver('google')->redirect() ;
    }

    //redirection of google login 
    public function HandleGoogleCallBack() {
        try{
            $user = Socialite::driver('google')->user() ;
            $findUser = User::where('google_id' , $user->id)->first() ;
            if($findUser) {
                Auth::login($findUser) ;
                return redirect()->intended('dashboard') ; //redirected
            }
            else{
                $newUser = User::create([
                    'name' => $user->name ,
                    'email' => $user->email ,
                    'google_id' => $user->id,
                    'password'=>Hash::make('123456789')
                ]) ;
                Auth::login($newUser) ;
                return redirect()->intended('dashboard') ; //redirected

            }
        }
        catch(Exception $e) {
            dd($e->getMessage()) ;
        }
    }
}
