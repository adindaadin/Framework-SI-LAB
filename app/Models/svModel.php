<?php

namespace App\Models;

use CodeIgniter\Model;

class svModel extends Model
{
    protected $table = "statusvalidation";
    protected $primaryKey = 'idvalidation';
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
}
