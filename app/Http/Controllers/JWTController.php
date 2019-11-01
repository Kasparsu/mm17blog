<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class JWTController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['authenticate']]);
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        try {
            if(!$token = auth()->attempt($credentials)){
              return response()->json(['error' => 'invalid credentials'], 400);
            }
        } catch (JWTException $e){
            return response()->json(['error' => 'could not create token']);
        }
        return response()->json(compact('token'));
    }

    public function me(){
        return response()->json(auth()->user());
    }

    public function logout(){
        auth()->logout();
    }
}
