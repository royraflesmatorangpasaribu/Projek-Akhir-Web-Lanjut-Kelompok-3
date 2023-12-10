<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;
use App\Models\ClassModel;
use App\Models\TaskDetailModel;

class TaskStudents extends BaseController
{
    public $taskModel;
    public $classModel;
    public $taskdetailModel;
    protected $db, $builder; 

    public function __construct(){
        $this-> db      = \Config\Database::connect();
        $this->taskModel = new TaskModel();
        $this->classModel = new ClassModel();
        $this->taskdetailModel = new TaskDetailModel();
        $this-> builder = $this->db->table('detail_task');
    }
    public function index()
    {
        $data = [
            'task'     => $this->taskModel->getTask(),
            'class'     => $this->classModel->getClass()
        ];
        return view('students/task', $data);
    }

    public function detail($id)
    {   

        $data['title']  = 'Task Detail';
       
        $this->builder->select('detail_task.*');
        $this->builder->join('task', 'detail_task.id_task = task.id');
        $this->builder->where('detail_task.id_task', $id);
        $query = $this->builder->get();

        $data['task']  = $query->getResult();

        $data['taskid'] = $id; 
        //dd(session('taskid'));
       
        if(empty($data['task'])){
            return redirect()->to('/task_students');
        }
        return view('students/detail_task', $data);
    }

    public function task()
    {
    
         $data = [
                'task'     => $this->taskModel->getTask(),
                'class'     => $this->classModel->getClass()
            ];
        

        return view('students/upload_task', $data);
    }


    public function do_upload()
{
    
    $path = 'uploads';

    $file = $this->request->getFile('pdf_file');
    $name = url_title($file->getRandomName(), '_', true); // Create a URL-friendly version of the filename

    if ($file->move($path, $name)) {
        $filePath = $name;

        $this->taskdetailModel->saveTask([
            'id_kelas' => $this->request->getVar('id_kelas'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'id_task' => $this->request->getVar('id_task'),
            'file' => $name, // Use the file path, not the base_url
        ]);

        $data = [
            'id_kelas' => $this->request->getVar('id_kelas'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'id_task' => $this->request->getVar('id_task'),
        ];

        return redirect()->to('/task_students');
    } else {
        return redirect()->to('/upload')->with('error', 'Gagal mengunggah file.');
    }
}

    
    public function view($id_pdf)
        {
            $data = array(
                'title' => 'View PDF',
                'file'  => $this->taskdetailModel->getTask($id_pdf),
    
            );
            return view('students/detailpdf', $data);
        }
}
