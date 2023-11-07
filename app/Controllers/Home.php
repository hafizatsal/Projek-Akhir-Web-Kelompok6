<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function register(): string
    {
        return view('auth/register');
    }
    public function user(): string
    {
        return view('user/index');
    }

    public function beranda_pasien()
    {
        return view('beranda_pasien');
    }

    public function beranda_admin()
    {
        return view('beranda_admin');
    }

    public function beranda_resepsionis()
    {
        return view('beranda_resepsionis');
    }

    public function form_daftar()
    {
        return view('form_daftar');
    }
}
