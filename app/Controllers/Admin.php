<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Auth;
use App\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class Admin extends BaseController
{
    protected $db, $builder; 
    public $userModel, $groupModel;

    public function __construct(){
       $this-> db      = \Config\Database::connect();
       $this-> builder = $this->db->table('users');
       $this->userModel = new UserModel();
       $this->groupModel = new GroupModel();

    }

    public function index($id=0)
    {
       
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        
       
        $query = $this->builder->get();
    
        // $data['users'] = $query->getResult();
        // //dd($data['users']);

        // $data = [
        //     'user_count' => $this->userModel->countUser()
        // ];

        $data = [
            'teachers_count' => $this->userModel->countTeacher(),
            'students_count' => $this->userModel->countStudent(),
            'parents_count' => $this->userModel->countParent(),
            'users' => $query->getResult()
        ];
        
        
        return view('admin/index', $data);
    }
    
    public function updateUser()
    {
        if ($this->request->getMethod() === 'post') {
            // Get the data from the form
            
            $userId = $this->request->getVar('user_id'); // Assuming you have a hidden input for user_id
            $newUsername = $this->request->getVar('username');
            $newEmail = $this->request->getVar('email');
            $newRoleId = $this->request->getVar('role'); // Role ID from the form

            // Call the updateUserInfo function to update the user's information
            $this->updateUserInfo($userId, $newUsername, $newEmail, $newRoleId);

            // Redirect to a success page or display a success message
            return redirect()->to('admin'); // Adjust the URL accordingly
        }

        return view('edit'); // Replace 'edit' with your view for editing user information
    }

    public function updateUserInfo($userId, $newUsername, $newEmail, $newRoleId)
{   
   // dd($userId,$newUsername,$newEmail,$newRoleId);
    $userData = [
        'username' => $newUsername,

        // Add other fields you want to update in the 'users' table
    ];

   
    
    $this->userModel->updateUser($userData, $userId);
    

   

}

    


    public function edit($id = 0)
    {
        $id = $_GET['id'];
        //dd($id);
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id',$id);
       
        $query = $this->builder->get();
        
        $data['val'] = $query->getRow();

        return view('admin/edit',$data);
    }

    public function redirect()
{
    if (in_groups('student')) {
        return redirect()->to('/student');
    } elseif (in_groups('parents')) {
        return redirect()->to('/parent');
    } elseif (in_groups('super_admin')) {
        return redirect()->to('/admin');
    } elseif (in_groups('teachers')) {
        return redirect()->to('/dashboard_teacher');
    } else {
        // Handle case where user doesn't belong to any known group
        return redirect()->to('/');
    }
}


    public function destroy($id)
    {
        $result = $this->userModel->deleteUser($id);
        
        if ($result) {
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/admin')->with('error', 'Failed to delete user.');
        }
    }

    public function create(){
        $this->groupModel = new GroupModel();
    
        $name = $this->groupModel->getUser();

        $data = [
            'title' => 'Create User',
            'name'  => $name,
        ];
        
        return view('/admin/create-data', $data);

    }

    // public function store(){
    //     // $this->groupModel = new GroupModel();
    //    $this->userModel->saveUser([
    //     'username' => $this->request->getVar('username'),
    //     'email' => $this->request->getVar('email'),
    //     'password' => $this->request->getVar('password'),
    //    ]);
    // //    $this->groupModel->saveUser([
    // //     'username' => $this->request->getVar('username'),
    // //     'email' => $this->request->getVar('email'),
    // //     'password' => $this->request->getVar('password'),
    // // ]);
    //     return redirect()->to('/admin');

    // }


    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user'  => $user,
        ];
        
        return view('admin/detail', $data);
    }

}
