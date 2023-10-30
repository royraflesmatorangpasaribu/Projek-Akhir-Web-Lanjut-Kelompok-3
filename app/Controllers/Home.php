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
}
