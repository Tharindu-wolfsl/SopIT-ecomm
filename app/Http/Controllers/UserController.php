<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
   public function login(Request $req){

    $user=User::where(['email'=>$req->email])->first();

if(!$user || !Hash::check($req->password,$user->password)){

    return 'Password not matched! or User not exist!';

}
else{
    $req->session()->put('user',$user);
    return  redirect('/');
}

     
    

    }

    public function register(Request $req){

        $user=User::where('email',$req->email)->get();
       
        
        if(!isEmpty($user)){
            return "This email already registered!";
        }
            $newuser=new User();
            $newuser->name=$req->username;
            $newuser->email=$req->email;
            $newuser->password=Hash::make($req->password);

            $newuser->save();

            return redirect('/login');

    }
}
