<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login;
use App\Services\MemberService;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function loginForm()
    {
        $params = [
            'title' => '教員 ログイン',
        ];

        return Inertia::render('Auth/Login', $params);
    }

    public function login(Login $request, MemberService $service)
    {
        $data = $request->all(['name', 'password']);

        $result = $service->login($data);
        if ($result['status']) {
            return redirect()->route('member.home');
        } else {
            return redirect()->back()->withErrors($result['errors']);
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->route('member.login-form');
    }
}