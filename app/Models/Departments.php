<?php

namespace App\Models;

use CodeIgniter\Model;

class Departments extends Model
{
    protected $table      = 'departments';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name', 'description', 'slug', 'visibility', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
