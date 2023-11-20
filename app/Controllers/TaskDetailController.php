<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskDetailModel;

class TaskDetailController extends BaseController
{
    protected $db, $builder; 

    public function __construct(){
       $this-> db      = \Config\Database::connect();
       $this->taskdetailModel = new TaskDetailModel();
       $this-> builder = $this->db->table('detail_task');
    }

    public function index($id)
    {
        $data['title']  = 'Task Detail';

        $this->builder->select('detail_task.*');
        $this->builder->join('task', 'detail_task.id_task = task.id');
        $this->builder->where('detail_task.id_task', $id);
        $query = $this->builder->get();

        $data['task']  = $query->getResult();

        if(empty($data['task'])){
            return redirect()->to('/task');
        }
        return view('teacher/task_detail', $data);
    }

    public function edit($id){
        
        $result = $this->taskdetailModel->getTask($id);

        $data = [
            'nilai' => $result,
        ];
        return view('teacher/edit-detail-task', $data);
    }
    
    public function update($id){
        // $id = $this->request->getVar('id');
        $data = [
            'nilai'        => $this->request->getVar('nilai'),
        ];

        $result = $this->taskdetailModel->updateNilai($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/task/detail/' . $id));
    }

}
