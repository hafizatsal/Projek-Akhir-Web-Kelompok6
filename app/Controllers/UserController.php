<?php

namespace App\Controllers;
use App\Models\UserModel;

use App\Controllers\BaseController;

class UserController extends BaseController
{

    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data =[
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function profile($username = "",$password = "",$nama_user = "", $no_ktp = "", $no_tlp = "", $alamat = "")
    {
        $data = [
            'username' => $username,
            'password' => $password,
            'nama_user' => $nama_user,
            'no_ktp' => $no_ktp,
            'no_tlp' => $no_tlp,
            'no_ktp' => $alamat,


        ];

        return view('detail_user', $data);
    }

    public function create()
    {
        return view('create_user');
    }

    public function pasien_daftar()
{
    $dataDaftar = [
        'nama' => $this->request->getVar('nama'),
        'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        'tanggal' => $this->request->getVar('tanggal_lahir'),
        'alamat' => $this->request->getVar('alamat'),
        'no_telp' => $this->request->getVar('no_telp'),
        'asal_rujukan' => $this->request->getVar('asal_rujukan'),
        'keluhan' => $this->request->getVar('keluhan'),
    ];

    // Simpan data ke database
    $userModel = new UserModel();
    $userModel->savePasien($dataDaftar);
    
    // Redirect ke halaman beranda pasien 
    dd($dataDaftar);
    // return redirect ->('home_pasien', $dataDaftar);
}

public function daftar(){
    return view('form_daftar');
}

public function show($id){

    $user = $this->userModel->getUser($id);

    $data = [
        'user' => $user
    ];

    return view('detail_user', $data);
}

public function edit($id){
    $user = $this->userModel->getUser($id);

    $data = [
        'user' => $user,
    ];

    return view('edit_user', $data);
}

public function update($id){

    $data = [
        'username' => $this->request->getVar('username'),
        'password' => $this->request->getVar('password'),
        'nama_user' => $this->request->getVar('nama_user'),
        'no_ktp' => $this->request->getVar('no_ktp'),
        'no_tlp' => $this->request->getVar('no_tlp'),
        'alamat' => $this->request->getVar('alamat'),

    ];

    $result = $this->userModel->updateUser($data, $id);

    if(!$result){
        return redirect()->back()->withInput()
        ->with('error', 'Gagal Menyimpan Data!');
    }

    return redirect()->to('/user');

}

public function destroy($id)
{
    $result = $this->userModel->deleteUser($id);
    if (!$result) {
        return redirect()->back()->with('error', 'Gagal menghapus data');
    } 
    return redirect()->to(base_url('/user'))
    ->with('success', 'Berhasil Menghapus data');
}

}
