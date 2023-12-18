<?php

namespace App\Controllers\Resepsionis;

use App\Models\DokterModel;
use App\Controllers\BaseController;
use CodeIgniter\Config\Config;

class DokterController extends BaseController
{
    protected $dokterModel;
    protected $validation;

    public function __construct()
    {
        $this->dokterModel = new DokterModel();
        $this->validation = \Config\Services::validation();

    }

    public function data_dokter()
    {
        $data = [
            'users' => $this->dokterModel->getDokter(),
        ];
        $data['templateJudul'] = 'Daftar Dokter';
        $data['templateAtas'] = "Dokter";
        echo view ('resepsionis/header', $data);
        echo view ('resepsionis/data_dokter', $data);
        echo view ('resepsionis/footer', $data);
    }    

    public function store()
    {   


            $this->dokterModel->saveDokter([
                'nip' => $this->request->getVar('nip'),
                'sip' => $this->request->getVar('sip'),
                'nama_dokter' => $this->request->getVar('nama_dokter'),
                'spesialis' => $this->request->getVar('spesialis'),
                'no_tlp' => $this->request->getVar('no_tlp'),
                'alamat' => $this->request->getVar('alamat'),
            ]);
        
        
        return redirect()->to('resepsionis/data_dokter');
    }

    // Add the missing closing brace for the class here


    public function tambah_dokter()
    {
        
    
        $data = [
            'users' => $this->dokterModel->getDokter(),
        ];
    
        $data['templateJudul'] = 'Tambah Dokter';
        $data['templateAtas'] = "Dokter";
    
        echo view ('resepsionis/header', $data);
        echo view('resepsionis/crud/tambah_dokter', $data);
        echo view ('resepsionis/footer', $data);
    }

    public function detail($id)
    {
        $user = $this->dokterModel->getDokter($id);
        $data = [
            'user' =>$user,
        ];
        $data['templateJudul'] = 'Detail Dokter';
        $data['templateAtas'] = "Dokter";
        echo view ('resepsionis/header', $data);
        echo view ('resepsionis/crud/detail_dokter', $data);
        echo view ('resepsionis/footer', $data);
    }

    public function edit_dokter($id)
    {
        $user = $this->dokterModel->getDokter($id);
        $data = [
            'user' =>$user,
        ];
        $data['templateJudul'] = 'Edit Dokter';
        $data['templateAtas'] = "Dokter";
        echo view ('resepsionis/header', $data);
        echo view ('resepsionis/crud/edit_dokter', $data);
        echo view ('resepsionis/footer', $data);
    }

    public function update_dokter($id)
    {
        $data = [
            'nip' => $this->request->getVar('nip'),
            'sip' => $this->request->getVar('sip'),
            'nama_dokter' => $this->request->getVar('nama_dokter'),
            'spesialis' => $this->request->getVar('spesialis'),
            'no_tlp' => $this->request->getVar('no_tlp'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        $result = $this->dokterModel->updateDokter($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data!');
        }

        return redirect()->to('resepsionis/data_dokter');
    }

    public function destroy($id)
    {
        $result = $this->dokterModel->deleteDokter($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('resepsionis/data_dokter'))
            ->with('success', 'Berhasil Menghapus data');
    }

}
