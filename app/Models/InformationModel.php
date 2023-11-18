<?php

namespace App\Models;

use CodeIgniter\Model;

class InformationModel extends Model
{
    protected $table            = 'information';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['date', 'title', 'text'];

    // Dates
    protected $useTimestamps = false;
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

    public function saveInformation($data){
        $this->insert($data);
    }

    public function getInformation($id = null){
        if($id != null){
            return $this->select('information.*')
                ->find($id);
        }
        return $this->findAll();
    }

    public function updateInformation($data, $id){
        return $this->update($id, $data);
    }

    public function deleteInformation($id){
       
        return $this->delete($id);
        
    }
}
