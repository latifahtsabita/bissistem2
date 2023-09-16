<?php

namespace App\Controllers;

use App\Models\Data_pd_Model;


// use App\Models\Data_pd_Model;

class Siswa extends BaseController
{
    protected $db, $builder;
    // protected $data_pd_Model;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('data_pd');
        // $this->data_pd_Model = new Data_pd_Model();
    }
    public function index()
    {
        $data['title'] = 'Daftar Peserta Didik';
        $this->builder->select('nis, nama, j_k');
        $query = $this->builder->get();


        $data['data_pd'] = $query->getResult();
        return view('siswa/index', $data);
    }

    public function detail()
    {
        $data ['title'] = 'Detail Data Peserta Didik';

        $this->builder->select('');
    }

    public function tambah()
    {
        $data = [
            'title' => 'Form Tambah Data Siswa',
            'validation' => \Config\Services::validation()
        ];
        return view('siswa/tambah', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());
        // $this->data_pd_Model->save([
        $siswa = new Data_pd_Model();
        $siswa->insert([
            'nis' => $this->request->getVar('nis'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'agama' => $this->request->getVar('agama'),
            'j_k' => $this->request->getVar('j_k'),
            'status_dlm_kel' => $this->request->getVar('status_dlm_kel'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'kelurahan' => $this->request->getVar('kelurahan'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'gol_dar' => $this->request->getVar('gol_dar'),
            'penyakit' => $this->request->getVar('penyakit'),
            'kelainan_jas' => $this->request->getVar('kelainan_jas'),
            'bb' => $this->request->getVar('bb'),
            'tb' => $this->request->getVar('tb')
        ]);

        return redirect('admin/siswa');
        // ]);
        // return redirect()->to('/siswa');

    }
}
