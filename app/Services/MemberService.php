<?php

namespace App\Services;

use App\Models\Member;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;

class MemberService
{
    public function login($data)
    {
        // code login

        return [
            'status' => false,
            'errors' => [
                'name' => 'WRONG USERNAME OR PASSWORD !!!',
                'password' => 'WRONG USERNAME OR PASSWORD !!!'
            ]
        ];
    }
}