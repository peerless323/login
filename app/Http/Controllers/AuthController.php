<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToProvider(Request $request, $service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * 从Github获取用户信息.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request, $service)
    {
        $user = Socialite::driver($service)->user();
        dd($user);
        // $user->token;
    }
}
