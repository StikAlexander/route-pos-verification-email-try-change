<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    use VerifiesEmails;

    protected $redirectTo = '/verification-success';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function verify(Request $request, $id, $hash)
    {
        // Lógica de verificación
        $request->fulfill(); // Completa la verificación

        return $this->verified($request); // Llama al método verified para redirigir
    }

    protected function verified(Request $request)
    {
        return redirect($this->redirectTo);
    }
}