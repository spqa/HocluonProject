<?php

namespace App\Http\Controllers;

use App\SocialAccount;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;
use Mockery\CountValidator\Exception;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $provideUser=Socialite::driver('facebook')->user();
        $socialAccount=SocialAccount::where('provider_user_id',$provideUser->getId())->first();
        if ($socialAccount){
            $user=$socialAccount->user()->first();
            auth()->login($user);
            //dd($user);
            return redirect('');
        }else{
            $socialAccount=new SocialAccount();
            $socialAccount->provider_user_id=$provideUser->getId();
            $socialAccount->provider='facebook';
            $socialAccount->avatar=$provideUser->getAvatar();
            if ($user=User::where('email',$provideUser->getEmail())->first()){
                $socialAccount->user()->associate($user);
            }else{
                $user=User::create([
                    'name'=>$provideUser->getName(),
                    'email'=>$provideUser->getEmail(),
                ]);
                $socialAccount->user()->associate($user);
            }
            $socialAccount->save();
            auth()->login($user);
            return redirect('');
        }
        // $user->token;
    }
}
