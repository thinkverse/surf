<?php

namespace Wave\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

final class EmailVerificationController extends Controller
{
    public function notice()
    {
        return view('wave::verify-email');
    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()
            ->with(['message' => 'Verification link sent!', 'message_type' => 'success']);
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()
            ->intended(route('wave.dashboard'))
            ->with(['message' => 'Successfully verified your email.', 'message_type' => 'success']);
    }
}
