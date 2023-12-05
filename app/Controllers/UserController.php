<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\Config\Config;

class UserController extends BaseController
{
    protected $userModel;
    protected $validation;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->validation = \Config\Services::validation();
        helper("cookie");
        helper("global_fungsi_helper");
    }

    public function puskesmas(){
        return view('beranda_pasien');
    }
    public function login()
    {
        $data = [];
        if(get_cookie('cookie_username') && get_cookie('cookie_password')){
            $username = get_cookie('cookie_username');
            $password = get_cookie('cookie_password');

            $dataAkun = $this->userModel->getAkun($username);
            if($password != $dataAkun['password']){
                $err[]="Akun yang kamu masukkan tidak sesuai";
                session()->setFlashdata('username', $username);
                session()->setFlashdata('warning', $err);

                delete_cookie('cookie_username');
                delete_cookie('cookie_password');
                return redirect()->to("/v_login");

            }
            $akun =[
                'akun_username' => $username,
                'akun_nama_user' => $dataAkun['nama_user'],
                'akun_level' =>$dataAkun['level'],
                'akun_no_ktp' =>$dataAkun['no_ktp'],
                'akun_no_tlp' =>$dataAkun['no_tlp'],
                'akun_alamat' =>$dataAkun['alamat'],
                'akun_last_login'=>$dataAkun['last_login']
            ];
            session()->set($akun);
            return redirect()->to('/user');
        }
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username harus diisi'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password harus diisi'
                    ]
                ],
            ];

            if (!$this->validate($rules)) {
                session()->setFlashdata("warning", $this->validation->getErrors());
                return redirect()->to("puskesmas/login");
            }

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            
            $remember_me = $this->request->getvar('remember_me');

            // pengecekan
            $dataAkun = $this->userModel->getAkun($username);
            if(!password_verify($password, $dataAkun['password'])){
                $err[]="Akun yang anda masukkan tidak sesuai";
                session()->setFlashdata('username', $username);
                session()->setFlashdata('warning', $err);
                return redirect()->to("puskesmas/login");
            }
            if($remember_me == '1'){
                set_cookie("cookie_username", $username,1);
                set_cookie("cookie_password", $dataAkun['password'],3600*24*30);
            }

            $akun =[
                'akun_username' => $dataAkun['username'],
                'akun_nama_user' => $dataAkun['nama_user'],
                'akun_level' =>$dataAkun['level'],
                'akun_no_ktp' =>$dataAkun['no_ktp'],
                'akun_no_tlp' =>$dataAkun['no_tlp'],
                'akun_alamat' =>$dataAkun['alamat'],
                'akun_last_login'=>$dataAkun['last_login']
            ];
            session()->set($akun);
            // return redirect()->to("/user")->withCookies();
            if ($dataAkun['level'] == 'admin') {
                return redirect()->to("admin/beranda")->withCookies();
            } elseif($dataAkun['level'] == 'resepsionis'){
                return redirect()->to("resepsionis/beranda")->withCookies();
            } else {
                return redirect()->to("pasien/beranda")->withCookies();
            }
        }

        echo view("/v_login", $data);
    }

   

   public function logout(){
        delete_cookie("cookie_username");
        delete_cookie("cookie_password");
        session()->destroy();
        if(session()->get('akun_username')!=''){
            session()->setFlashdata("success","anda berhasil logout");
        }
        echo view("v_login");
    }

    public function lupapassword(){
        $err = [];
        if($this->request->getMethod() == 'post'){
            $username = $this->request->getVar('username');
            if($username == ''){
                $err[]="Silahkan masukkan username atau email yang terdaftar";
            }
            if(empty($err)){
                $data =$this->userModel->getAkun($username);
                if(empty($data)){
                    $err[] = "Akun yang kamu masukkan tidak terdaftar";
                }
            }
            if(empty($err)){
                $email = $data['email'];
                $token = md5(date('ymdhis'));

                $link = site_url("/resetpassword/?email=$email&token=$token");
                $attachment = "";
                $to = $email;
                $title = "Reset Password";
                $message ="Berikut ini adalah link untuk melakukan reset password Anda";
                $message .= "Silahkan klik link berikut $link";

                kirim_email($attachment, $to, $title, $message);
                
                $dataUpdate = [
                    'email' => $email,
                    'token' => $token
                ];
                $this->userModel->updateAkun($dataUpdate);
                session()->setFlashdata("success", "Email untuk recovery sudah dikirimkan ke email anda");
            }

            if($err){
                session()->setFlashdata("warning", $err);
            }
            return redirect() ->to("/lupapassword");
        }
        echo view("v_lupapassword");
    }

    function resetpassword(){
        $err=[];
        $email =$this->request->getVar('email');
        $token = $this->request->getVar('token');
        if($email != '' and $token !=''){
            $dataAkun = $this->userModel->getAkun($email);
            if($dataAkun['token'] != $token){
                $err[] ="token tidak valid";
            }
        }else{
            $err[] ="parameter yang dikirimkan tidak valid";
        }

        if($err){
            session()->setFlashdata("warning", $err);
        }

        if($this->request->getMethod()=='post'){
            $aturan =[
                'password' => [
                    'rules' => 'required|min_length[5]',
                    'errors' => [
                        'required' => "Password harus diisi",
                        'min_length' => "Panjang karakter minimum untuk password adalah 
                        5 karakter"
                    ]
                ],
                'konfirmasipassword' => [
                    'rules' => 'required|min_length[5]|matches[password]',
                    'errors' => [
                        'required' => "Konfirmasi Password harus diisi",
                        'min_length' => "Panjang karakter minimum untuk konfirmasi password adalah 
                        5 karakter",
                        'matches' => "Konfirmasi Password tidak sama dengan password yang diisikan"
                    ]
                ]
            ];

            if(!$this->validate($aturan)){
                session()->setFlashdata('warning', $this->validation->getErrors());
            }else{
                $dataUpdate = [
                    'email' => $email,
                    'password' =>password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'token' => null
                ];
                $this->userModel->updateAkun($dataUpdate);
                session()->setFlashdata('success', 'Password berhasil di reset silahkan login');

                delete_cookie('cookie_username');
                delete_cookie('cookie_password');
                
                return redirect()->to('/login')->withCookies();
            }
        }
        echo view("v_resetpassword");
    }

    public function index()
    {
        $data = [
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function profile($username = "", $password = "", $nama_user = "", $no_ktp = "", $no_tlp = "", $alamat = "")
    {
        $data = [
            'username' => $username,
            'password' => $password,
            'nama_user' => $nama_user,
            'no_ktp' => $no_ktp,
            'no_tlp' => $no_tlp,
            'alamat' => $alamat,
        ];

        return view('detail_user', $data);
    }

    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        $this->userModel->saveUser([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama_user' => $this->request->getVar('nama_user'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'no_tlp' => $this->request->getVar('no_tlp'),
            'alamat' => $this->request->getVar('alamat'),
        ]);
        return redirect()->to('/user');
    }

    // Add the missing closing brace for the class here

    public function show($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'user' => $user
        ];

        return view('detail_user', $data);
    }

    public function edit($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'user' => $user,
        ];

        return view('edit_user', $data);
    }

    public function update($id)
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama_user' => $this->request->getVar('nama_user'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'no_tlp' => $this->request->getVar('no_tlp'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        $result = $this->userModel->updateUser($data, $id);

        if (!$result) {
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
