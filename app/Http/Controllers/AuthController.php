<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;




class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'curp' => 'required',
            'birthdate' => 'required|date',
        ]);

        if($validator->fails())
        {
            return response()->json(['status_code' => 400, 'message' => 'Bad Request']);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->curp = $request->curp;
        $user->birthdate = $request->birthdate;
        $user->password = bcrypt($request->password);
        $user->save();
        event(new Registered($user));
        return response()->json([
            'status_code' => 200,
            'message' => 'User created succesfully!'
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['status_code'=> 400, 'message' => 'Bad Request']);
        }

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
        {
            return response()->json([
                'status_code' => 500,
                'message' => 'Wrong credential!'
            ]);
        }

        $user = User::where('email', $request->email)->first();

       $tokenResult = $user->createtoken('authToken')->plainTextToken;
    //    $user_id = $request->session()->put('user_id', $user->id);
        // $value = $request->session()->get('key');
        // Session::put('user_id', $user->id);    
        // session(['user_id' => $user->id]);
        // Session::get('user_id');
    return response()->json([
            'status_code' => 200,
            // 'message' => $user_id
            // 'Connected'
            'token' => $tokenResult
            // 'user_id' => $user->id
            // 'user_id' => session('user_id')
        ])->cookie('user_id', $user->id, 60);
    }
    
     public function logout(Request $request)
     {
         $request->user()->currentAccessToken()->delete();
         return response()->json([
             'status_code' => 200,
             'message' => 'Token deleted, logout'
         ]);
     }

     
}
