<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKoleksi;

class ControllerKoleksi extends BaseController
{
    public function index()
    {
        return view('Koleksi/table', [
            'daftar_koleksi' => (new ModelKoleksi())->findAll()
        ]);
    }
    public function create()
    {
        $data = [
            'nomor_koleksi' => $this->request->getPost('nomor_koleksi'),
            'status_koleksi' => $this->request->getPost('status_koleksi')
        ]; 

        $model = new ModelKoleksi();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('Koleksi'));
    }
    public function form(){
        return view('Koleksi/form');
    }
    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new ModelKoleksi();
        $m->delete($id);
        return redirect()->to(base_url('Koleksi'));
    }
}