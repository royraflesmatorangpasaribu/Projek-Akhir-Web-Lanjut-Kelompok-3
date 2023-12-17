<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table            = 'task';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','id_kelas','keterangan','created_at','updated_at' ];

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
            return $this->select('task.*')
                ->find($id);
        }
        return $this->findAll();
    }

    public function updateTask($data, $id){
        return $this->update($id, $data);
    }

    // public function deleteTask($id){
    //     return $this->delete($id);
    // }
    public function deleteTask($id)
    {
        // Check if there are related rows in the detail_task table
        $hasRelatedRows = $this->db->table('detail_task')
            ->where('id_task', $id)
            ->countAllResults() > 0;
    
        if ($hasRelatedRows) {
            // Delete related rows in the detail_task table
            $this->db->table('detail_task')->where('id_task', $id)->delete();
        }
    
        // Now, you can safely delete the task
        $this->delete($id);
    
        // Provide a success message or redirect to an appropriate page
        return "Task deleted successfully.";
    }
    
    public function getName()
    {
        return $this->db->table('task')
            ->join('kelas', 'kelas.id = task.id_kelas')
            ->select('task.*, kelas.nama_kelas')
            ->get()
            ->getResultArray();
    }
    
    
}
