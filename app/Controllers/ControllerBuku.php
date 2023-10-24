<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBuku;

class ControllerBuku extends BaseController
{
    public function index ()
    {
        return view('Buku/table', [
            'daftar_buku' => (new ModelBuku())->findAll()
        ]);
    }
    public function create ()
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'edisi' => $this->request->getPost('edisi'),
            'cetakan' => $this->request->getpost('cetakan'),
            'sinopsis' => $this->request->getpost('sinopsis'),
            'halaman' => $this->request->getpost('halaman'),
            'penulis' => $this->request->getpost('penulis')
        ]; 

        $model = new ModelBuku();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('Buku'));
    }
    public function form(){
        return view('Buku/form');
    }
    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new ModelBuku();
        $m->delete($id);
        return redirect()->to(base_url('Buku'));
    }
}
