<?php

namespace App\Controllers;
use App\Models\ClassModel;
use Config\Auth;
use App\Models\UserModel;
use Myth\Auth\Models\GroupModel;
use App\Models\InformationModel;

class Home extends BaseController
{

    protected $db, $builder; 
  
    public function __construct(){
       $this-> db      = \Config\Database::connect();
       $this-> builder = $this->db->table('users');
     
    }

    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard_super_admin(): string
    {
        return view('dashboard_super_admin');
    }

    // public function students(): string
    // {
    //     $class = [
    //         [
    //             'id'    => 1,
    //             'name_class'    => 'A'
    //         ],

    //         [
    //             'id'    => 2,
    //             'name_class'    => 'B'
    //         ],

    //         [
    //             'id'    => 3,
    //             'name_class'    => 'C'
    //         ],

    //         [
    //             'id'    => 4,
    //             'name_class'    => 'D'
    //         ],
            
    //     ];

    //     $data = [
    //         'class'     => $class,
    //     ];

    //     return view('students', $data);
    // }

    // public function parents(): string
    // {
    //     return view('parents');
    // }

    public function class(): string
    {   
        
        $sql = 'SELECT * FROM kelas';
        $query = $this->db->query($sql);

        $data['class'] = $query->getResult()    ;
      
        return view('class',$data);
    }
    public function delete_class($class_id=0)
{
    if ($this->request->getMethod() === 'post') {
        $class_id = $this->request->getVar('class_id');

        // Validate the class ID if necessary

        // Delete the class record from the 'kelas' table
        $this->db->table('kelas')->where('id', $class_id)->delete();

        // Redirect to a success page or show a success message
        return redirect()->to('http://localhost:8080/class');
    }

    // Handle the case when the form is not submitted
    return redirect()->to('http://localhost:8080/class');
}
    public function create_class()
    {
        if ($this->request->getMethod() === 'post') {
            $nama_kelas = $this->request->getVar('nama_kelas');
            $daya_tampung = $this->request->getVar('daya_tampung');
            
            // Validate the data if necessary
            
            // Insert data into the 'kelas' table
            $data = [
                'nama_kelas' => $nama_kelas,
                'daya_tampung' => $daya_tampung
            ];
    
            $this->db->table('kelas')->insert($data);
    
            // Redirect to a success page or show a success message
            return redirect()->to('http://localhost:8080/class');
        }
        return view('create_class');
    }
    public function edit_class($id=0)
    {
        if ($this->request->getMethod() === 'post') {
            $id = $this->request->getVar('id');
            $nama_kelas = $this->request->getVar('nama_kelas');
            $daya_tampung = $this->request->getVar('daya_tampung');
            
            // Validate the data if necessary
            
            // Insert data into the 'kelas' table
            $data = [
                'nama_kelas' => $nama_kelas,
                'daya_tampung' => $daya_tampung
            ];
    
            $this->db->table('kelas')->where('id', $id)->update($data);
    
            // Redirect to a success page or show a success message
            return redirect()->to('http://localhost:8080/class');
        }
        $id = $_GET['id'];
        //dd($id);
        $query = $this->db->table('kelas')->select('nama_kelas, daya_tampung,id')->where('id', $id);
        $data['val'] = $query->get()->getRow();
    
        return view('edit_class', $data);
    }

    public function teacher(): string

    {
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('auth_groups.name', 'teachers');

        
        $query = $this->builder->get();

        $data['users']  = $query->getResult();

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

    public function students(): string

    {
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('auth_groups.name', 'students');

        
        $query = $this->builder->get();

        $data['users']  = $query->getResult();

        return view('students', $data);
    }

    public function createstudent(){
        $classModel = new ClassModel();

        $class = $classModel->getClass();

        $data = [
            'kelas' => $class,
        ];

        return view('students', $data);
    }

    public function parents(): string

    {
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('auth_groups.name', 'parents');

        
        $query = $this->builder->get();

        $data['users']  = $query->getResult();

        return view('parents', $data);
    }

    public function createparent(){
        $classModel = new ClassModel();

        $class = $classModel->getClass();

        $data = [
            'kelas' => $class,
        ];

        return view('parents', $data);
    }

    public function profile(): string
    {
        return view('profile');
    }

    public function dashboard_teacher()
    {
        return view('teacher/dashboard_teacher');
    }

    public function dashboard_parents(): string
    {
        return view('parents_dashboard');
    }

    public function dashboard_students()
    {
        return view('dashboard_students');
    }

    public function class_students()
    {
        return view('class_students');
    }

    public function information_students()
    {
        return view('information_students');
    }

    public function profile_students()
    {
        return view('profile_students');
    }

    public function detail_class()
    {
        return view('detail_class');
    }

    public function profile_students_edit()
    {
        return view('profile_students_edit');
    }

    public function lstud()
    {
        
            $this->builder->select('users.id as userid, username, email, name');
            $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
            $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
            $this->builder->where('auth_groups.name', 'students');
    
            
            $query = $this->builder->get();
    
            $data['users']  = $query->getResult();
           //dd($data);
            return view('list_students', $data);
    }
    public function detail_stud($id){
        $this->builder->select('users.id as userid, username, email');
        $this->builder->where('users.id', $id); // Corrected to 'users.id'
        $query = $this->builder->get();
        $data['user'] = $query->getResult();
        //dd($data['user']);
        return view('parentstuddetail', $data);
    }
    

}