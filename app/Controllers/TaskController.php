<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;
use App\Models\ClassModel;

class TaskController extends BaseController
{
    protected $modelName    = 'App\Models\TaskModel';
    public $taskModel;
    public $classModel;
    protected $db, $builder; 

    public function __construct(){
        $this-> db      = \Config\Database::connect();
        $this->taskModel = new TaskModel();
        $this->classModel = new ClassModel();
        $this-> builder = $this->db->table('task');
    }
    public function task()
    {
        
        if(session('taskid')!=null)return redirect()->to('/task/detail/'.session('taskid'));
        $data = [
            'name'   => $this->taskModel->getName(),
            'task'     => $this->taskModel->getTask(),
            'class'     => $this->classModel->getClass()
        ];
        return view('teacher/index', $data);
    }

    public function store(){
        $this->taskModel->saveTask([
            'id_kelas'      => $this->request->getVar('id_kelas'),
            'keterangan'      => $this->request->getVar('keterangan'),
        ]);
       
        $data = [
            'id_kelas' => $this->request->getVar('id_kelas'),
            'keterangan' => $this->request->getVar('keterangan'),
        ];
        return redirect()->to(base_url('/task'));
    }

    public function update($id){
        // $id = $this->request->getVar('id');
        $data = [
            'id_kelas'        => $this->request->getVar('id_kelas'),
            'keterangan'       => $this->request->getVar('keterangan'),
        ];

        $result = $this->taskModel->updateTask($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/task'));
    }

    public function destroy($id){
        $result = $this->taskModel->deleteTask($id);
        if (!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/task'))
            ->with('success', 'Berhasil menghapus data');
    }

}
