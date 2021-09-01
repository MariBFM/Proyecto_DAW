<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function update(Request $request){
      $user = auth()->user();
      $name = $request['name'];
      if(empty($name)){
        $name = $user->name;
      }
      $surname = $request['surname'];
      if(empty($surname)){
        $surname = $user->surname;
      }
      $email = $request['email'];
      if(empty($email)){
        $email = $user->email;
      }
      $birth = $request['birth'];
      if(empty($birth)){
        $birth = $user->birth;
      }
      $password = $request['password'];
      if(empty($password)){
        $password = $user->password;
      }else{
        $password = Hash::make($password);
      }

      $user->name= $name;
      $user->surname = $surname;
      $user->email = $email;
      $user->birth = $birth;
      $user->password = $password;
      $user->save();
      return redirect()->route('home');
    }
}
