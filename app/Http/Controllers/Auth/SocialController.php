<?php
namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

        class SocialController extends Controller
    {
        // Redirect to Google for authentication
        public function redirectToGoogle()
        {
            return Socialite::driver('google')->redirect();
        }

        // Handle the Google callback
        public function handleGoogleCallback()
        {
            $googleUser = Socialite::driver('google')->user();

            // Find or create a user from the Google account
            $user = User::firstOrCreate([
                'email' => $googleUser->getEmail(),
            ], [
                'name' => $googleUser->getName(),
                'role' => 'admin',
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
            ]);

            // Log the user in
            Auth::login($user, true);

            // Redirect to the desired location (usually the home page)
            return redirect()->route('admin.dashboard');
        }

















        public function redirectToFacebook()
        {
            return Socialite::driver('facebook')->redirect();
        }
    
        // Handle the Facebook callback
        public function handleFacebookCallback()
        {
            $facebookUser = Socialite::driver('facebook')->user();
    
            // Find or create a user from the Facebook account
            $user = User::firstOrCreate([
                'email' => $facebookUser->getEmail(),
            ], [
                'name' => $facebookUser->getName(),
                'role' => 'admin',
                'facebook_id' => $facebookUser->getId(),
                'avatar' => $facebookUser->getAvatar(),
                'password' => Hash::make(Str::random(16)), // Facebook users don't need a password
            ]);
    
            // Log the user in
            Auth::login($user, true);
    
            // Redirect to the desired location (usually the home page)
            return redirect()->route('admin.dashboard');
        }









        
    }
