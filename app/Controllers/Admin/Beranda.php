<?php

namespace App\Controllers\Admin;
use App\Models\UserModel;

use App\Controllers\BaseController;

class Beranda extends BaseController{
  

    function beranda(){
        $data =[];
        $data['templateJudul'] = 'Dashboard Admin';
        echo view ('admin/header', $data);
        echo view ('admin/v_dashboard', $data);
        echo view ('admin/footer', $data);
    }

    function data_dokter(){
        $data = [];
        $data['templateJudul'] = 'Data Dokter';
        echo view ('admin/header', $data);
        echo view ('admin/data_dokter', $data);
        echo view ('admin/footer', $data);
    }

}