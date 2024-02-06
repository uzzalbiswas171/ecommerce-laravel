<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(){
        return User::all();
     }
  
    public function Sarch(Request $request){
       
        return User::where('name', $request->Search)->get();
     }

    public function createUser(Request $request){
       
        return User::where('name', $request->Search)->get();
     }
  
}