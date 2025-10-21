<?php
namespace app\controller;

use app\service\AuthService;
use think\Request;

class AuthController
{
    public function __construct(private AuthService $service)
    {
    }

    public function googleCallback(Request $request)
    {
        $this->service->handleGoogleCallback($request->param());

        return redirect('/oauth/success');
    }

    public function msCallback(Request $request)
    {
        $this->service->handleMicrosoftCallback($request->param());

        return redirect('/oauth/success');
    }
}
