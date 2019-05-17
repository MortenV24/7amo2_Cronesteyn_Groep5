<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req){
        $gebruikersnaam = $req->input('Gebruikersnaam');
        $wachtwoord = $req->input('Wachtwoord');

        $checkLogin = \DB::table('users')->where(['Gebruikersnaam'=>$gebruikersnaam, 'Wachtwoord'=>$wachtwoord ])->get();
        if(count($checkLogin) > 0){
            return redirect('index');
        }
        else{
            return redirect('index');
        }
    }
}
