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
    $this->taskdetailModel->saveTask([
        'id_kelas'      => $this->request->getVar('id_kelas'),
        'nama_siswa'      => $this->request->getVar('nama_siswa'),
        'id_task'       => $this->request->getVar('id_task'),
       'file'       =>  $this->request->getFile('pdf_file'),
    ]);

    $file = $this->request->getFile('pdf_file');
    $nama_siswa = $this->request->getVar('nama_siswa');
    $id_kelas = $this->request->getVar('id_kelas');
    $id_task = $this->request->getVar('id_task');

    if ($file && $file->isValid() && !$file->hasMoved()) {
        // Pindahkan file ke direktori uploads dengan menggunakan nama asli
        $newName = $file->getName(); // Atau $file->getName() jika Anda ingin menggunakan nama asli
        $file->move('./uploads', $newName);

        // Simpan informasi file dan ID kelas dan task ke dalam database
        $detailTaskModel = new TaskDetailModel();
        $data = [
            'filename' => $newName,
            'filepath' => base_url('uploads/' . $newName),
            'id_kelas' => $id_kelas,
            'id_task' => $id_task,
            'nama_siswa' => $nama_siswa,
        ];

        return redirect()->to('/task_students')->with('success', 'File berhasil diunggah!');
    } else {
        return redirect()->to('/upload')->with('error', 'Gagal mengunggah file.');
    }
}

public function viewFile($file)
{
    $filePath = FCPATH . 'uploads/' . $file;

    if (file_exists($filePath)) {
        return $this->response->download($filePath, null)->setHeader('Content-Type', mime_content_type($filePath));
    } else {
        return redirect()->to('/task_students')->with('error', 'File tidak ditemukan.');
    }
}

public function redirect(){
    if(in_groups("user")){
        return redirect()->to("/student");
    }else{
        return redirect()->to("/admin");
    }  
}

}
