<?php

namespace App\Models;

use CodeIgniter\Model;

class LabModel extends Model
{
    protected $table = "lab";
    protected $primaryKey = 'idlab';
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'update_at';
    protected $useTimestamps = true;
    protected $allowedFields = ['namakegiatan', 'slug', 'pelaksana', 'tanggal', 'alokasiwaktu', 'lokasi', 'anggaran', 'semester'];

    public function getLab($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
