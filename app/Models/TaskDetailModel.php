<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskDetailModel extends Model
{
    protected $table            = 'detail_task';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_kelas', 'id_task','nama_siswa', 'file', 'nilai', 'created_at','updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    

    public function saveTask($data){
        $this->insert($data);
    }
    
    public function getTask($id = null){
        if($id != null){
            return $this->select('detail_task.*')
                ->find($id);
        }
        return $this->findAll();
    }

    public function updateNilai($data, $id){
        return $this->update($id, $data);
    }

    public function deleteTask($id){
        return $this->delete($id);
    }
    
    public function getName()
    {
        return $this->db->table('detail_task')
            ->join('kelas', 'kelas.id = detail_task.id_kelas')
            ->join('task', 'task.id = detail_task.id_task')
            ->get()
            ->getResultArray();
    }
    
}
