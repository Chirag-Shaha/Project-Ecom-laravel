<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $user = user::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "username or password not matched";
            
        }
        else
        {
            
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
