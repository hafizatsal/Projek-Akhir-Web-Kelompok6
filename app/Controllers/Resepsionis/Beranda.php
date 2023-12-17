<?php

namespace App\Controllers\Resepsionis;
use App\Models\UserModel;

use App\Controllers\BaseController;

class Beranda extends BaseController{
    function beranda(){
        
        $data =[];
        $data['templateJudul'] = 'Daftar Antrian';
        echo view ('resepsionis/header', $data);
        echo view ('resepsionis/beranda_resepsionis', $data);
        echo view ('resepsionis/footer', $data);
    }

    function jadwal_praktek(){
        $data =[];
        $data['templateJudul'] = 'Jadwal Praktek';
        echo view ('resepsionis/header', $data);
        echo view ('resepsionis/jadwal_praktek', $data);
        echo view ('resepsionis/footer', $data);
    }

    function data_dokter(){
        $data = [];
        $data['templateJudul'] = 'Data Dokter';
        echo view ('admin/header', $data);
        echo view ('admin/data_dokter', $data);
        echo view ('admin/footer', $data);
    }

}