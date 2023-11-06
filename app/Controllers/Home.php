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

        $class = [
            [
                'id'    => 1,
                'name_class'    => 'A'
            ],

            [
                'id'    => 2,
                'name_class'    => 'B'
            ],

            [
                'id'    => 3,
                'name_class'    => 'C'
            ],

            [
                'id'    => 4,
                'name_class'    => 'D'
            ],
            
        ];

        $data = [
            'class'     => $class,
        ];

        return view('teacher', $data);
    }

    public function create(){
        $classModel = new ClassModel();

        $class = $classModel->getClass();

        $data = [
            'kelas' => $class,
        ];

        return view('teacher', $data);
    }
}
