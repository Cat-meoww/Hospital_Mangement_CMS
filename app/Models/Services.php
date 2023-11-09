<?php

namespace App\Models;

use CodeIgniter\Model;

class Services extends Model
{
    protected $table      = 'services';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name', 'description', 'slug', 'dept_id', 'visibility', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
