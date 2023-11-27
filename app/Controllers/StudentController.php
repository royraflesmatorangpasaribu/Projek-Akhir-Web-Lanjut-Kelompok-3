<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InformationModel;
use App\Models\StudentsModel;
use App\Models\UserModel;

use Myth\Auth\Password;

class StudentController extends BaseController
{
    public $db, $builder; 
    public $userModel;

    public $InformationModel;

    // public $helpers=['Form'];


    public function __construct(){
        $this->InformationModel = new InformationModel();
        $this->userModel = new UserModel();
        $this-> db      = \Config\Database::connect();
        $this-> builder = $this->db->table('users');
    }

    public function information()
    {
        $data = [
            'information'     => $this->InformationModel->getInformation()
        ];

        return view('information_students',$data);
    }

    public function edit($id){
        $user = $this->userModel->getStudents($id);

        $data = [
            'title' => 'Edit User',
            'user' => $user,
        ];

        // dd($data);

        return view('/profile_students_edit', $data);
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

        $result = $this->userModel->updateStudents($id, $data);

        // dd($result);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan data');
        }

        return redirect()->to('/profile_students');
    }

    public function detail($id = 0)
    {
        $data['title']  = 'User Detail';

        
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user']  = $query->getRow();

        if(empty($data['user'])){
            return redirect()->to('/profile_students');
        }

        return view('profile_students',$data);
    }

    public function coba()
    {
        return view('profile_students_edit');
    }



}