<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard_super_admin(): string
    {
        return view('dashboard_super_admin');
    }

    public function students(): string
    {
        return view('students');
    }

    public function parents(): string
    {
        return view('parents');
    }

    public function teacher(): string
    {
        return view('teacher');
    }

    public function login(): string
    {
        return view('login');
    }

    public function register(): string
    {
        return view('register');
    }
}
