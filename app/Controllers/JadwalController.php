<?php

namespace App\Controllers;

use App\Models\JadwalModel;

use App\Controllers\BaseController;

use CodeIgniter\Config\Config;

class JadwalController extends BaseController
{
    protected $jadwalModel;

    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();


    }

    public function jadwal_dokter()
    {
        $data = [
            'kelas' => $this->jadwalModel->getJadwal(),
            
        ];
       
        $data['templateJudul'] = 'Jadwal Dokter';
        $data['templateAtas'] = "Dokter";
        echo view ('admin/header', $data);
        echo view ('admin/data_jadwal', $data);
        echo view ('admin/footer', $data);
    }    

    public function buat_jadwal()
    {
        return view('admin/buat_jadwal');
    }

    public function jadwal_store()
    {
        $this->jadwalModel->saveJadwal([
            'senin' => $this->request->getVar('senin'),
            'selasa' => $this->request->getVar('selasa'),
            'rabu' => $this->request->getVar('rabu'),
            'kamis' => $this->request->getVar('kamis'),
            'jumat' => $this->request->getVar('jumat'),
            'sabtu' => $this->request->getVar('sabtu'),

            
        ]);
        return redirect()->to('admin/jadwal_dokter');
    }

    
    public function update_jadwal($id)
    {
        $kelas = $this->jadwalModel->getJadwal($id);
        $data = [
            'kelas' =>$kelas,
            'senin' => $this->request->getVar('senin'),
            'selasa' => $this->request->getVar('selasa'),
            'rabu' => $this->request->getVar('rabu'),
            'kamis' => $this->request->getVar('kamis'),
            'jumat' => $this->request->getVar('jumat'),
            'sabtu' => $this->request->getVar('sabtu'),

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
