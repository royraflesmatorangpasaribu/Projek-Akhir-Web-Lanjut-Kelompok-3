<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Myth\Auth\Password;

class UserController extends BaseController
{
    public $db, $builder; 
    public $userModel;

    // public $helpers=['Form'];


    public function __construct(){
        $this->userModel = new UserModel();
        $this-> db      = \Config\Database::connect();
        $this-> builder = $this->db->table('users');
    }

    public function index()
    {
        return view('teacher/user');
    }

    public function edit($id){
        $user = $this->userModel->getT($id);

        $data = [
            'title' => 'Edit User',
            'user' => $user,
        ];

        // dd($data);

        return view('teacher/profile_edit', $data);
    }

    public function update($id){

        $data = [
            'email'  => $this->request->getVar('email'),
            // 'password_hash' => Password::hash($this->request->getVar('password')),
        ];

        if($this->request->getVar('password') != ''){
            $data['password_hash'] = Password::hash($this->request->getVar('password'));
        }

        // dd($data);

        $result = $this->userModel->updateTeacher($id, $data);

        // dd($result);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan data');
        }

        return redirect()->to('/user');
    }
}
