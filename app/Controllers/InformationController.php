<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InformationModel;

class InformationController extends BaseController
{
    public $InformationModel;

    public function __construct(){
        $this->InformationModel = new InformationModel();
    }
    public function information()
    {
        $data = [
            'information'     => $this->InformationModel->getInformation()
        ];
        return view('information', $data);
    }

    public function store(){
        $this->InformationModel->saveInformation([
            'date'      => $this->request->getVar('recipient-date'),
            'title'      => $this->request->getVar('title'),
            'text'       => $this->request->getVar('message-text'),
        ]);

        $InformationModel = new InformationModel();
        $date = $this->request->getPost('recipient-date');
        $title = $this->request->getPost('title');
        $text = $this->request->getPost('message-text');

        $data=[
            'date' => $date,
            'title' => $title,
            'text' => $text,
        ];

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
