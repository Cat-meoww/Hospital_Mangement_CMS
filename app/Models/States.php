<?php

namespace App\Models;

use CodeIgniter\Model;

class States extends Model
{
    protected $table      = 'states';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name', 'country_id', 'latitude', 'longitude'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $dateFormat = 'datetime';
}
