<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\VerifyPhoneNotification;
use App\Services\VerifyCodeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => ['required'],
        ]);

        $phone = $request->input('phone');

        $user = User::query()->wherePhone($phone)->first();

        $code = VerifyCodeService::has($phone);

        if (!$code) {
            $code = VerifyCodeService::generate();
            VerifyCodeService::destroy($phone);
            VerifyCodeService::store($phone, $code);
        } else {
            $code = $code->code;
        }

//        Notification::send(null, new VerifyPhoneNotification($phone, $code));

        if (!$user) {
            $url = \Illuminate\Support\Facades\URL::temporarySignedRoute('user.confirm.register', now()->addMinutes(50), ['phone' => $phone]);
            return redirect($url);
        }

        $url = \Illuminate\Support\Facades\URL::temporarySignedRoute('user.confirm.login', now()->addMinutes(50), ['phone' => $phone]);
        return redirect($url);
    }
}
