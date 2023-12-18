<?php

namespace App\Controllers\Admin;

use App\Models\PoliModel;
use App\Models\DokterModel;
use App\Models\JadwalModel;

use App\Controllers\BaseController;

use CodeIgniter\Config\Config;

class JadwalController extends BaseController
{
    protected $poliModel;
    protected $dokterModel;
    protected $jadwalModel;


    public function __construct()
    {
        $this->poliModel = new PoliModel();
        $this->dokterModel = new DokterModel();
        $this->jadwalModel = new JadwalModel();

    }

    public function jadwal_dokter()
    {
        $data = [
            'jadwal' => $this->jadwalModel->getJadwal(),
            
        ];
       
        $data['templateJudul'] = 'Jadwal';
        $data['templateAtas'] = "Jadwal";
        echo view ('admin/header', $data);
        echo view ('admin/data_jadwal', $data);
        echo view ('admin/footer', $data);
    }    

    
    public function tambah_jadwal()
    {      
        $poli =$this->poliModel->getPoli();
        $dokter =$this->dokterModel->getDokter();
        $jadwal =$this->jadwalModel->getJadwal();

        $data = [
            'poli' => $poli,
            'dokter' => $dokter,
            'jadwal' => $jadwal,
        ];
    
        $data['templateJudul'] = 'Tambah Jadwal';
        $data['templateAtas'] = "Jadwal";
    
        echo view('admin/header', $data);
        echo view('admin/crud/tambah_jadwal', $data);
        echo view('admin/footer', $data);
    }
    public function jadwal_store()
    {
        $this->jadwalModel->saveJadwal([
            'hari' => $this->request->getVar('hari'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'id_poli' => $this->request->getVar('id_poli'),
            'id_dokter' => $this->request->getVar('id_dokter'),

            
        ]);
        return redirect()->to('admin/jadwal_dokter');
    }

    public function edit_jadwal($id)
    {
        $poli =$this->poliModel->getPoli();
        $dokter =$this->dokterModel->getDokter();
        $jadwal =$this->jadwalModel->getJadwal($id);        
        $data = [
            'poli' =>$poli,
            'dokter' =>$dokter,
            'jadwal' =>$jadwal,
        ];
        $data['templateJudul'] = 'Edit Jadwal';
        $data['templateAtas'] = "Jadwal";
        echo view ('admin/header', $data);
        echo view ('admin/crud/edit_jadwal', $data);
        echo view ('admin/footer', $data);
    }

    public function update_jadwal($id)
    {
        $data = [
            'hari' => $this->request->getVar('hari'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_seselai' => $this->request->getVar('jam_seselai'),
            'id_poli' => $this->request->getVar('id_poli'),
            'id_dokter' => $this->request->getVar('id_dokter'),

           
        ];

        $result = $this->jadwalModel->updateJadwal($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data!');
        }

        return redirect()->to('admin/jadwal_dokter');
    }

    public function delete_jadwal($id)
    {
        $result = $this->jadwalModel->deleteJadwal($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('admin/jadwal_dokter'))
            ->with('success', 'Berhasil Menghapus data');
    }

}
