<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dokter';
    // protected $primaryKey       = 'id';
    protected $primaryKey       = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nip', 'sip','nama_dokter','spesialis', 'alamat', 'no_tlp'];

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


    public function saveDokter ($data){
        $this->insert($data);
    }
    public function getDokter($id = null){
        if($id != null){
            return $this->find($id);
        }
        return $this->findAll();
    }
    public function updateDokter($data, $id){
        return $this->update($id, $data);
    }

    public function deleteDokter($id){

        return $this->delete($id);

    }

    
}
