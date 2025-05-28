<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'email'    => 'required|email',
            'password' => 'required|string|min:8'

        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }      
            
    $user = User::Create([
        'email'=>$request->email,
        'password'=> Hash::make($request->password) 
    ]); 
    $token = $

    }

}
