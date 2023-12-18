<?php

namespace App\Database\Seeds;

use App\Models\PoliModel;
use CodeIgniter\Database\Seeder;

class SeederPoli extends Seeder
{
    public function run()
    {
        $poliModel = new PoliModel();
        $poliModel->save([
            'kode_poli' => 'RG-01',
            'nama_poli' => 'Umum',
        ]);
        $poliModel->save([
            'kode_poli' => 'RG-02',
            'nama_poli' => 'Gigi',
        ]);
        $poliModel->save([
            'kode_poli' => 'RG-03',
            'nama_poli' => 'KIA/KB',
        ]);
        }
}
