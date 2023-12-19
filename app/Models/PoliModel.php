<?php

namespace App\Models;

use CodeIgniter\Model;

class PoliModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'poli';
    // protected $primaryKey       = 'id';
    protected $primaryKey       = 'id_poli';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_poli', 'nama_poli'];

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


    public function savePoli ($data){
        $this->insert($data);
    }
    public function getPoli($id = null){
        if($id != null){
            return $this->find($id);
        }
        return $this->findAll();
    }
    public function updatePoli($data, $id){
        return $this->update($id, $data);
    }

    public function deletePoli($id){

        return $this->delete($id);

    }

    
}
