<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\VerifyPhoneNotification;
use App\Providers\RouteServiceProvider;
use App\Services\VerifyCodeService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
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

        //            Notification::send(null, new VerifyPhoneNotification($phone, $code));

        if (!$user) {
            $url = \Illuminate\Support\Facades\URL::temporarySignedRoute('user.confirm.register', now()->addMinutes(50), ['phone' => $phone]);
            return redirect($url);
        }

        $url = \Illuminate\Support\Facades\URL::temporarySignedRoute('user.confirm.login', now()->addMinutes(50), ['phone' => $phone]);
        return redirect($url);


//        event(new Registered($user));
//
//        Auth::login($user);
//
//        return redirect(RouteServiceProvider::HOME);
    }
}
