<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;

class ChangeAvatarController extends Controller
{
    public function changeAvatar(Request $request)
    {
        $path = $request->file('avatar')->store('/avatars', 'public');

        if (Auth::check()) {
            /**
             * После проверки уже можешь получать любое свойство модели
             * пользователя через фасад Auth, например id
             */
            $user = Auth::user()->id;
        }

        DB::table('users')
            ->where('id', $user)
            ->update(['avatar' => $path]);    

        
        return redirect(RouteServiceProvider::HOME);
    }
}
