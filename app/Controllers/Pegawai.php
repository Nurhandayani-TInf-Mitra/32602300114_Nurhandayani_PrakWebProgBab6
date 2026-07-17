<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    protected $pegawai;

    public function __construct()
    {
        $this->pegawai = new PegawaiModel();
    }

    // Menampilkan seluruh data pegawai
    public function index()
    {
        $data = [
            'pegawai' => $this->pegawai->findAll()
        ];

        return view('pegawai/index', $data);
    }

    // Menampilkan halaman tambah data
    public function tambah()
    {
        return view('pegawai/tambah');
    }

    // Menyimpan data pegawai
    public function simpan()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_handphone' => $this->request->getPost('nomor_handphone'),
            'email' => $this->request->getPost('email')
        ];

        $this->pegawai->insert($data);

        return redirect()->to('/pegawai');
    }
//Edit Data Pegawai
    public function edit($id)
{
    $data['pegawai'] = $this->pegawai->find($id);

    return view('pegawai/edit', $data);
}
public function update()
{
    $id = $this->request->getPost('id_pegawai');

    $data = [
        'nama' => $this->request->getPost('nama'),
        'nik' => $this->request->getPost('nik'),
        'jabatan' => $this->request->getPost('jabatan'),
        'alamat' => $this->request->getPost('alamat'),
        'nomor_handphone' => $this->request->getPost('nomor_handphone'),
        'email' => $this->request->getPost('email')
    ];
    
    $this->pegawai->update($id, $data);

    return redirect()->to('/pegawai');
}

// Menghapus data pegawai
public function delete($id) {
    $this->pegawai->delete($id);

    return redirect()->to(base_url('pegawai'));
}

}