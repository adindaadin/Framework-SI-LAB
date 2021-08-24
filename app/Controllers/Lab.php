<?php

namespace App\Controllers;

use App\Models\LabModel;

class Lab extends BaseController
{
    protected $labModel;
    public function __construct()
    {
        $this->labModel = new LabModel();
    }

    public function index()
    {
        //$lab = $this->labModel->findAll();

        // INI BAGIAN MODEL
        $data = [
            'title' => 'Rencana Kegiatan | SI LAB',
            'lab' => $this->labModel->getLab()
        ];

        return view('lab/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Laporan Rencana | SI LAB',
            'lab' => $this->labModel->getLab($slug)
        ];

        // jika lab tidak ada di tabel
        if (empty($data['lab'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('' . $slug .  'Tidak Ditemukan');
        }
        return view('lab/detail', $data);
    }


    public function create()
    {
        //session();
        $data = [
            'title' => 'Tambah Rencana | SI LAB',
            'validation' => \Config\Services::validation()
        ];
        return view('lab/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'namakegiatan' => [
                'rules' => 'required|is_unique[lab.namakegiatan]',
                'errors' => [
                    'required' => '{field} Nama Kegiatan harus diisi.',
                    'is_unique' => '{field} Nama Kegiatan sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/lab/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('namakegiatan'), '-', true);
        $this->labModel->save([
            'namakegiatan' => $this->request->getVar('namakegiatan'),
            'slug' => $slug,
            'pelaksana' => $this->request->getVar('pelaksana'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alokasiwaktu' => $this->request->getVar('alokasiwaktu'),
            'lokasi' => $this->request->getVar('lokasi'),
            'anggaran' => $this->request->getVar('anggaran'),
            'semester' => $this->request->getVar('semester')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');

        return redirect()->to('/lab');
    }

    public function delete($idlab)
    {
        $this->labModel->delete($idlab);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/lab');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Rencana | SI LAB',
            'validation' => \Config\Services::validation(),
            'lab' => $this->labModel->getLab($slug)
        ];
        return view('lab/edit', $data);
    }

    public function update($idlab)
    {
        $slug = url_title($this->request->getVar('namakegiatan'), '-', true);
        $this->labModel->save([
            'idlab' => $idlab,
            'namakegiatan' => $this->request->getVar('namakegiatan'),
            'slug' => $slug,
            'pelaksana' => $this->request->getVar('pelaksana'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alokasiwaktu' => $this->request->getVar('alokasiwaktu'),
            'lokasi' => $this->request->getVar('lokasi'),
            'anggaran' => $this->request->getVar('anggaran'),
            'semester' => $this->request->getVar('semester')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil diubah');

        return redirect()->to('/lab');
    }
}
