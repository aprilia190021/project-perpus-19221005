<?php

namespace App\Controllers;

use Codeigniter\Controller;

class UserController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); // Mengambil koneksi database  
    }

    public function tambahPengguna($email, $nama_lengkap, $katasandi)
    {
        $data =[
            'email' => $email,
            'nama_lengkap' => $nama_lengkap,
            'katasandi' => password_hash($katasandi, PASSWORD_DEFAULT), // Meng-hash kata sandi sebelum disimpan 
        ];

        $builder = $this->db->table('tb_pengguna');
        $builder->update($data);

        return $this->db->affectedRows();
    }

    public function hapusPengguna($id)
    {
        $builder = $this->db->table('tb_pengguna');
        $builder->where('id', $id);
        $builder->delete();

        return $this->db->affectedRows();
    }

}