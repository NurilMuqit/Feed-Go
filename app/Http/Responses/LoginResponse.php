<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        if (in_array($user->role, ['admin', 'superadmin'])) {
            return redirect('/admin/dashboard');
        }

        $request->session()->forget('url.intended');

        return redirect()->route('beranda');
    }
}

