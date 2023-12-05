<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('akun_username')){
            return redirect()->to('puskesmas/login');
        }

        if (session()->get('akun_level') == 'pasien' && strpos(current_url(true)->getPath(), 'admin') !== false) {
            return redirect()->to('puskesmas/login'); // Ganti '/beranda' dengan URL beranda yang sesuai
        }
        if (session()->get('akun_level') == 'pasien' && strpos(current_url(true)->getPath(), 'resepsionis') !== false) {
            return redirect()->to('puskesmas/login'); // Ganti '/beranda' dengan URL beranda yang sesuai
        }


        // admin
        if (session()->get('akun_level') == 'admin' && strpos(current_url(true)->getPath(), 'resepsionis') !== false) {
            return redirect()->to('puskesmas/login'); // Ganti '/beranda' dengan URL beranda yang sesuai
        }
        if (session()->get('akun_level') == 'admin' && strpos(current_url(true)->getPath(), 'pasien') !== false) {
            return redirect()->to('puskesmas/login'); // Ganti '/beranda' dengan URL beranda yang sesuai
        }


        // resepsionis
        if (session()->get('akun_level') == 'resepsionis' && strpos(current_url(true)->getPath(), 'admin') !== false) {
            return redirect()->to('puskesmas/login'); // Ganti '/beranda' dengan URL beranda yang sesuai
        }
        if (session()->get('akun_level') == 'resepsionis' && strpos(current_url(true)->getPath(), 'pasien') !== false) {
            return redirect()->to('puskesmas/login'); // Ganti '/beranda' dengan URL beranda yang sesuai
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}