<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function loginform()
    {
        return view('auth.login');
    }


    public function registerform()
    {
        return view('auth.register');
    }
    public function error403()
    {
        return view('auth.errors.error403');
    }















    public function register(Request $request)
    {
        // Check if Google or Facebook login data is passed
        if ($request->has('google_user_data')) {
            $googleUserData = $request->input('google_user_data');
        
            // Check if the user already exists based on the email
            $user = User::firstOrCreate([
                'email' => $googleUserData['email'],
            ], [
                'name' => $googleUserData['name'],
                'google_id' => $googleUserData['google_id'],
                'avatar' => $googleUserData['avatar'],
                'password' => Hash::make(Str::random(16)), // Google users don't need a password
            ]);
        
            // Log the user in
            Auth::login($user, true);
        
            // Redirect to dashboard after successful login
            return redirect()->route('user.dashboard');
        }
    
        if ($request->has('facebook_user_data')) {
            $facebookUserData = $request->input('facebook_user_data');
        
            // Check if the user already exists based on the email
            $user = User::firstOrCreate([
                'email' => $facebookUserData['email'],
            ], [
                'name' => $facebookUserData['name'],
                'facebook_id' => $facebookUserData['facebook_id'],
                'avatar' => $facebookUserData['avatar'],
                'password' => Hash::make(Str::random(16)), // Facebook users don't need a password
            ]);
        
            // Log the user in
            Auth::login($user, true);
        
            // Redirect to dashboard after successful login
            return redirect()->route('admin.dashboard');
        }
    
        // Manual registration (non-Google, non-Facebook)
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);
    
        // If validation fails, return back with errors
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Create a new user with the validated data
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = 'user'; // Default role is 'user'
        $user->save();
    
        // Log the user in immediately after registration
        Auth::login($user, true);
    
        // Redirect to the appropriate dashboard based on role
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('user.dashboard');
    }
    

















    public function login(Request $request)

    {
    // dd($request->all());

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        } else {
            return back()->withErrors(['email' => 'The provided credentials are incorrect.'])->withInput();
        }
    }
}
