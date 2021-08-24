<?php

namespace App\Controllers;

use App\Models\svModel;
use App\Models\lrkModel;


class Pages extends BaseController
{

    protected $svModel;
    protected $lrkModel;
    public function __construct()
    {
        $this->svModel = new svModel();
        //$this->lrkModel = new lrkModel();
    }


    public function index()
    {
        $data = [
            'title' => 'HOME | SI LAB'
        ];

        return view('pages/home', $data);
    }

    public function rkl()
    {
        $data = [
            'title' => 'Rencana Kegiatan | SI LAB'
        ];
        return view('pages/rkl', $data);
    }


    public function lrk()
    {
        $kegiatanlab = $this->lrkModel->findAll();

        $data = [
            'title' => 'Rencana Kegiatan | SI LAB',
            'kegiatanlab' => $kegiatanlab
        ];

        return view('pages/lrk', $data);
    }


    public function sv()
    {
        $statusvalidation = $this->svModel->findAll();

        $data = [
            'title' => 'Status Rencana | SI LAB',
            'statusvalidation' => $statusvalidation
        ];

        return view('pages/sv', $data);
        //koneksi tanpa DB
        //$db = \Config\Database::connect();
        //$statusvalidation = $db->query("SELECT * FROM statusvalidation");
        //foreach ($statusvalidation->getResultArray() as $row) {
        //    d($row);
        //}

        //koneksi DB dengan model
        //$svModel = new \App\Models\svModel();

        //$svModel = new svModel();
        //dd($statusvalidation);
    }

    public function ljk()
    {
        $data = [
            'title' => 'Laporan jadwal Kegiatan | SI LAB'
        ];
        return view('pages/ljk', $data);
    }
}
