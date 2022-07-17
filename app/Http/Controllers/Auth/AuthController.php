<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{
    //
    public function showLogin()
     {
        return response()->view('dashboard.auth.login');
    }
    public function login(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:1|max:20',

        ]);

        if (!$validator->fails()) {
            $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];
            if (Auth::guard('admin')->attempt($credentials )) {
                return response()->json([
                    'message' => 'Logged in successfully'
                ], Response::HTTP_OK);
            } else {
                return response()->json([
                    'message' => "Error credentials, check and try again"
                ], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first(),
            ], Response::HTTP_BAD_REQUEST);
        } 

    }



    public function logout(Request $request)
    {
        //auth('admin')->logout();
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('auth.login-show');

    }
}
