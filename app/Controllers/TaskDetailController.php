<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskDetailModel;
use App\Models\TaskModel;
use App\Models\ClassModel;

class TaskDetailController extends BaseController
{
    protected $db, $builder; 
    public $taskdetailModel;
    public $taskModel;
    public $classModel;

    public function __construct(){
       $this-> db      = \Config\Database::connect();
       $this->taskdetailModel = new TaskDetailModel();
       $this->taskModel = new TaskModel();
       $this->classModel = new ClassModel();
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
            return redirect()->to('/task');
        }
        return view('teacher/task_detail', $data);
    }

    public function edit($id){
        
        $result = $this->taskdetailModel->getTask($id);
        $taskid = $this->request->getVar('taskid');
        
        $data = [
            'nilai' => $result,
            'taskid' => $taskid,
        ];
        return view('teacher/edit-detail-task',$data);
    }
    
    public function update($id){
        $taskid = $this->request->getVar('taskid');
        //dd($taskid);
        $data = [
            'nilai'        => $this->request->getVar('nilai'),
        ];

        $result = $this->taskdetailModel->updateNilai($data, $id);
        
        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/task'))->with('taskid',$taskid);
        session()->set('taskid', $taskid);
    }

    public function destroy($id){

        $result = $this->taskdetailModel->deleteTask($id);
        $taskid = $this->request->getVar('taskid');

    
        if (!$result){
    
          return redirect()->to(base_url('/task/detail/' . $id))
    
          ->with('error', 'Gagal menghapus data');
    
        }

        if ($taskid != null){
            return redirect()->to(base_url('/task/detail/' . $taskid))
    
          ->with('success', 'Berhasil menghapus data');
        }

        return redirect()->to(base_url('/task/detail/'))
    
          ->with('success', 'Berhasil menghapus data');
        }

        

}