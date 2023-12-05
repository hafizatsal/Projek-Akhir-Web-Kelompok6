<?php

namespace App\Database\Seeds;

use App\Models\DokterModel;

use CodeIgniter\Database\Seeder;

class SeederDokter extends Seeder
{
    public function run()
    {
        $dokterModel = new DokterModel();
        $dokterModel->save([
            'nip' => '012135',
            'sip' => '2340770',
            'nama_dokter' => 'Drs.Djuanda',
            'spesialis' => 'gigi',
            'alamat' => 'Jalan Jalan',
            'no_tlp' => '09876545071',
        ]);
        $dokterModel->save([
            'nip' => '012365',
                'sip' => '2348770',
                'nama_dokter' => 'Drs.Djoko',
                'spesialis' => 'anak',
                'alamat' => 'Jalan Jalan',
                'no_tlp' => '09876584501'
        ]);
        $dokterModel->save([
            'nip' => '012335',
            'sip' => '2347270',
            'nama_dokter' => 'Dr.silah',
            'spesialis' => 'dalam',
            'alamat' => 'Jalan Jalan',
            'no_tlp' => '09876545801'
        ]);
        $dokterModel->save([
            'nip' => '0123115',
            'sip' => '234870',
            'nama_dokter' => 'Drs.sugiyo',
            'spesialis' => 'kulit',
            'alamat' => 'Jalan Jalan',
            'no_tlp' => '09876545401'
        ]);
;  
        
    }
}
