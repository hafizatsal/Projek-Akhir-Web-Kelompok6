<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jadwal';
    // protected $primaryKey       = 'id';
    protected $primaryKey       = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['hari', 'tanggal','jam_selesai','jam_mulai','id_poli','id_dokter'];

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

 
    public function saveJadwal ($data){
        $this->insert($data);
    }

    public function getJadwal ($id = null){
        if($id != null){
            return $this->select('jadwal.*, poli.nama_poli, dokter.nama_dokter')
            ->join('poli', 'poli.id_poli=jadwal.id_poli')
            ->join('dokter', 'dokter.id=jadwal.id_dokter')
            ->find($id);
        }
        return $this->select('jadwal.*, poli.nama_poli, dokter.nama_dokter')
        ->join('poli', 'poli.id_poli=jadwal.id_poli')
        ->join('dokter', 'dokter.id=jadwal.id_dokter')
        ->find();    
    }

    

    public function updateJadwal ($data, $id){
        return $this->update($id, $data);
    }

    public function deleteJadwal ($id){

        return $this->delete($id);

    }

    
}
