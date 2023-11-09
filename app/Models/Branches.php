<?php

namespace App\Models;

use CodeIgniter\Model;

class Branches extends Model
{
    protected $table      = 'branches';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['location_id', 'name', 'description', 'slug', 'address', 'email', 'telephone', 'gmap', 'departments', 'visibility', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
