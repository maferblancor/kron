<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        


        if(Auth::guard('admin')->check())
        {
            return route('admin.login'); 
        }
        else
        {
            return route('login'); 
        }

    #if ($request->expectsJson()) {
        #    return response()->json(['message' => 'Unauthenticated.'], 401);
        #}

        // $login = 'login';
        // $guards = array_keys(config('auth.guards'));
        // foreach ($guards as $guard) {
        //   if(Auth::guard($guard)->check()){
        //     switch ($guard) {
        //     case 'admin':
        //          $login = 'admin.login';
        //         break;
        //     case 'web':
        //         $login = 'login';
        //         break;
        //     }
        //   } 
        // }


                 
        // return route($login);
    
    }
}
