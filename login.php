<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // Tampilkan halaman login
        return view('login');
    }

    public function login()
    {
        // Validasi input dari form login
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembali ke halaman login
            return redirect()->to('/login')->withInput()->with('errors', $validation->getErrors());
        }

        // Cek kredensial pengguna dan lakukan otentikasi
        // Implementasi otentikasi akan bergantung pada metode Anda

        if ($login_success) {
            // Jika otentikasi berhasil, arahkan ke halaman yang sesuai
            return redirect()->to('/dashboard');
        } else {
            // Jika otentikasi gagal, tampilkan pesan kesalahan
            return redirect()->to('/login')->with('error', 'Email atau password salah.');
        }
    }
}