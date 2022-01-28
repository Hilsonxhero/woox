<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\VerifyCodeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmController extends Controller
{
    public function show(Request $request, $phone)
    {

        if (!\request()->hasValidSignature()) {
            abort(404);
        }

        return view('auth.confirm');
    }

    public function check(Request $request)
    {
        $phone = $request->input('phone');

        $code = $request->input('code');

        $status = VerifyCodeService::check($phone, $code);

        if (!$status) {

        }

        $user = User::where('phone', $phone)->first();

        if (!$user) {
            $user = User::create([
                'phone' => $phone
            ]);
        }

        Auth::loginUsingId($user->id);

        return redirect()->route('home');

    }
}
