<?php

namespace App\Controllers\Pasien;
use App\Models\UserModel;

use App\Controllers\BaseController;

class Beranda extends BaseController{
    function beranda(){
        
        $data =[];
        $data['templateJudul'] = 'Daftar Antrian';
        echo view ('pasien/header', $data);
        echo view ('pasien/beranda_pasien', $data);
        echo view ('pasien/footer', $data);
    }

    function riwayat_antrian(){
        $data =[];
        $data['templateJudul'] = 'Riwayat Antrian';
        echo view ('pasien/header', $data);
        echo view ('pasien/riwayat_antrian', $data);
        echo view ('pasien/footer', $data);
    }

}