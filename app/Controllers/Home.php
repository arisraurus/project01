<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $username = \auth()->user();
        d($username);
        $data = [
            'login_timeout' => $username->login_timeout,
            'username' => $username->username
        ];
        return view('index', $data);
    }
    public function main()
    {
        $data = [
            'title' => 'Selamat datang',
        ];
        return view('main', $data);
    }
}
