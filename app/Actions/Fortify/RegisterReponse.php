<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Fortify;

class RegisterResponse implements Responsable
{
    private $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function toResponse($request)
    {
        $this->guard->logout(); // logs out the session
        return $request->wantsJson()
                    ? new JsonResponse('', 201)
                    : redirect()->intended(Fortify::redirects('register'));
    }
}
