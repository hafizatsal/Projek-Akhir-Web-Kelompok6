<?php

namespace App\Controllers\Admin;

use App\Models\PoliModel;
use App\Controllers\BaseController;
use CodeIgniter\Config\Config;

class PoliController extends BaseController
{
    protected $poliModel;
    protected $validation;

    public function __construct()
    {
        $this->poliModel = new PoliModel();
        $this->validation = \Config\Services::validation();

    }

    public function poli()
    {
        $data = [
            'poli' => $this->poliModel->getPoli(),
        ];
        $data['templateJudul'] = 'Manajemen Poli';
        $data['templateAtas'] = "Poli";
        echo view ('admin/header', $data);
        echo view ('admin/data_poli', $data);
        echo view ('admin/footer', $data);
    }  
    
  

    public function store()
    {   


            $this->poliModel->savePoli([
                'kode_poli' => $this->request->getVar('kode_poli'),
                'nama_poli' => $this->request->getVar('nama_poli'),
            ]);
        
        
        return redirect()->to('admin/poli');
    }

    // Add the missing closing brace for the class here


    public function tambah_poli()
    {
        
    
        $data = [
            'poli' => $this->poliModel->getPoli(),
        ];
    
        $data['templateJudul'] = 'Tambah Poli';
        $data['templateAtas'] = "Poli";
    
        echo view('admin/header', $data);
        echo view('admin/crud/tambah_poli', $data);
        echo view('admin/footer', $data);
    }

    public function detail_poli($id)
    {
        $poli = $this->poliModel->getPoli($id);
        $data = [
            'poli' =>$poli,
        ];
        $data['templateJudul'] = 'Detail Poli';
        $data['templateAtas'] = "Poli";
        echo view ('admin/header', $data);
        echo view ('admin/crud/detail_poli', $data);
        echo view ('admin/footer', $data);
    }

    public function edit_poli($id)
    {
        $poli = $this->poliModel->getPoli($id);
        $data = [
            'poli' =>$poli,
        ];
        $data['templateJudul'] = 'Edit Poli';
        $data['templateAtas'] = "Poli";
        echo view ('admin/header', $data);
        echo view ('admin/crud/edit_poli', $data);
        echo view ('admin/footer', $data);
    }

    public function update_poli($id)
    {
        $data = [
            'kode_poli' => $this->request->getVar('kode_poli'),
            'nama_poli' => $this->request->getVar('nama_poli'),
           
        ];

        $result = $this->poliModel->updatePoli($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data!');
        }

        return redirect()->to('admin/poli');
    }

    public function destroy_poli($id)
    {
        $result = $this->poliModel->deletePoli($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('admin/poli'))
            ->with('success', 'Berhasil Menghapus data');
    }

}
