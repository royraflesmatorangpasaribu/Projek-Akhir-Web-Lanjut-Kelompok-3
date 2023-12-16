<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InformationModel;
use App\Models\UserModel;

use Myth\Auth\Password;


class InformationController extends BaseController
{
    public $InformationModel;
    public $db, $builder; 
    public $userModel;

    public function __construct(){
        $this->InformationModel = new InformationModel();
        $this->userModel = new UserModel();
        $this-> db      = \Config\Database::connect();
        $this-> builder = $this->db->table('users');
    }
    public function profile(): string
    {
        return view('admin/profile');
    }

    public function edit($id){
        $user = $this->userModel->getStudents($id);

        $data = [
            'title' => 'Edit Profile',
            'user' => $user,
        ];

        // dd($data);

        return view('admin/profile_edit', $data);
    }

    public function updatepr($id){

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

        return redirect()->to('/profile_admin');
    }


    public function information()
    {
        $data = [
            'information'     => $this->InformationModel->getInformation()
        ];
        return view('information', $data);
    }

    public function create_information()
    {
        return view('create_information');
    }

    public function store(){
       
      

        // validasi
        if(!$this->validate([
            'recipient-date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!!',
                ]   
            ],
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!!',
                ]
            ],
            'message-text' => [
                'rules' => 'required',
                'errors' => [
                'required' => '{field} harus di isi!!',
                ]
            ],
           
        ])){
           
    
            return redirect()->back()->withInput();
        }

        $data = [
            'date'      => $this->request->getVar('recipient-date'),
            'title'      => $this->request->getVar('title'),
            'text'       => $this->request->getVar('message-text'),  
        ];
        // dd($data);

        $this->InformationModel->saveInformation($data);

        return redirect()->to(base_url('/information'));
    }

    public function update($id){
        // $id = $this->request->getVar('id');
        $data = [
            'date'        => $this->request->getVar('recipient-date'),
            'title'       => $this->request->getVar('title'),
            'text'       => $this->request->getVar('message-text'),
        ];

        $result = $this->InformationModel->updateInformation($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/information'));
    }

    public function destroy($id){
        $result = $this->InformationModel->deleteInformation($id);
        if (!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/information'))
            ->with('success', 'Berhasil menghapus data');
    }

}
