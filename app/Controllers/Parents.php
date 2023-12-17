<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskDetailModel;
use App\Models\TaskModel;
use App\Models\ClassModel;
use App\Models\UserModel;
use App\Models\InformationModel;
use Myth\Auth\Password;

class Parents extends BaseController
{
    protected $db, $builder; 
    public $taskdetailModel;
    public $taskModel;
    public $classModel;
    public $userModel;
    public $InformationModel;

    public function __construct(){
       $this-> db      = \Config\Database::connect();
       $this->taskdetailModel = new TaskDetailModel();
       $this->InformationModel = new InformationModel();
       $this->taskModel = new TaskModel();
       $this->classModel = new ClassModel();
       $this->userModel = new UserModel();
       $this-> builder = $this->db->table('detail_task');
    }

    public function index($id)
    {   

        
        $data['title']  = 'Task Detail';
       
        $this->builder->select('detail_task.id, detail_task.nama_siswa, detail_task.file, detail_task.nilai');
        $this->builder->join('task', 'detail_task.id_task = task.id');
        $this->builder->join('kelas', 'detail_task.id_task = kelas.id');
        $this->builder->where('detail_task.id_task', $id);
        $query = $this->builder->get();

        $data['task']  = $query->getResult();
        // $data = [
        //     'name'   => $this->taskModel->getName(),
        //     'task'     => $this$query->getResult(),
        //     'class'     => $this->classModel->getClass()
        // ];
        $data['taskid'] = $id; 
        //dd(session('taskid'));
       
        if(empty($data['task'])){
            return redirect()->to('/students_detail');
        }
        return view('parents/task_detail', $data);
    }

    public function task()
    {
        
        if(session('taskid')!=null)return redirect()->to('/task/detail/'.session('taskid'));
        $data = [
            'name'   => $this->taskModel->getName(),
            'task'     => $this->taskModel->getTask(),
            'class'     => $this->classModel->getClass()
        ];
        return view('parents/index', $data);
    }

    public function profile_parents()
    {
        return view('parents/profile_parents');
    }

    public function edit($id){
        $user = $this->userModel->getStudents($id);

        $data = [
            'title' => 'Edit User',
            'user' => $user,
        ];

        // dd($data);

        return view('parents/profile_parents_edit', $data);
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

        $result = $this->userModel->updateParents($id, $data);

        // dd($result);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan data');
        }

        return redirect()->to('parents/profile');
    }

    public function information()
    {
        $data = [
            'information'     => $this->InformationModel->getInformation()
        ];

        return view('parents/information_parents',$data);
    }
}
