<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederUser extends Seeder
{
    public function run()
    {
        $data = [
           
                'username' => 'admin',
                'password' => password_hash('12345', PASSWORD_DEFAULT),
                'level' => 'admin',
                'email' => 'puskesmaskarang06@gmail.com',
                'nama_user' => 'Admin Diya',
                'no_ktp' => '12356789',
                'alamat' => 'Jalan Jalan',
                'no_tlp' => '0987654509'
        ];
        $this->db->table('user')->insert($data);  
        $data2 = [
                'username' => 'resepsionis',
                'password' => password_hash('23456', PASSWORD_DEFAULT),
                'level' => 'resepsionis',
                'email' => 'user1@example.com',
                'nama_user' => 'User Satu',
                'no_ktp' => '98765432',
                'alamat' => 'Jalan Buntu',
                'no_tlp' => '0123456789'
        ];
        $this->db->table('user')->insert($data2);
        $data3 = [
                'username' => 'pasien',
                'password' => password_hash('34567', PASSWORD_DEFAULT),
                'level' => 'pasien',
                'email' => 'user2@example.com',
                'nama_user' => 'User Dua',
                'no_ktp' => '54321678',
                'alamat' => 'Jalan Terjal',
                'no_tlp' => '9876543210'

        ];
        $this->db->table('user')->insert($data3);
    }
}
