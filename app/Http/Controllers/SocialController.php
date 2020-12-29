<?php

namespace App\Http\Controllers;
use Socialite;
use Auth;
use App\User;

use Illuminate\Http\Request;

class SocialController extends Controller
{

    public function redirect($provider)
    {
     return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $users = User::where(['email' => $userSocial->getEmail()])->first();
        if($users){
            Auth::login($users);
            return redirect('/');
        }else{
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);         
            return redirect()->route('/dashboard');
        }
}

public function TwitterCallback()
{
         $twitterSocial =   Socialite::driver('twitter')->user();
        $users       =   User::where(['email' => $twitterSocial->getEmail()])->first();if($users){
            Auth::login($users);
            return redirect('/home');
        }else{$user = User::firstOrCreate([
                'name'          => $twitterSocial->getName(),
                'email'         => $twitterSocial->getEmail(),
                'image'         => $twitterSocial->getAvatar(),
                'provider_id'   => $twitterSocial->getId(),
                'provider'      => 'twitter',
            ]);            return redirect()->route('home');
        }
  }

}
