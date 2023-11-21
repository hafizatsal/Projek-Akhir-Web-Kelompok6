<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'password', 'nama_user', 'no_ktp', 'alamat', 'no_tlp'];

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

    public function saveUser ($data){
        $this->insert($data);
    }
    public function getUser($id = null){
        if($id != null){
            return $this->find($id);
        }
        return $this->findAll();
    }
    public function updateUser($data, $id){
        return $this->update($id, $data);
    }

    public function deleteUser($id){

        return $this->delete($id);

    }

    public function saveDaftar($dataDaftar) {
        $this->insert($dataDaftar);
    }

    public function savePasien($dataDaftar) {
        $this->insert($dataDaftar);
    }
}
