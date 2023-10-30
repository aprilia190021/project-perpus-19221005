<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController 
{
    public function index()
    {
        return view('Anggota/table', [
            'daftar_anggota' => (new AnggotaModel())->findAll()
        ]);
    }

    public function create()
    {
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'notelp' => $this->request->getPost('notelp'),
            'email' => $this->request->getPost('email')
        ]; 

        $model = new AnggotaModel();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('Anggota'));
    }

    public function form(){
        return view('Anggota/form');
    }

    public function edit($id){
        $r = (new AnggotaModel())->where('id', $id)->first();
        return view('Anggota/form', [
            'data' => $r
        ]);
        
    }
    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new AnggotaModel();
        $m->delete($id);
        return redirect()->to(base_url('Anggota'));
    }
}