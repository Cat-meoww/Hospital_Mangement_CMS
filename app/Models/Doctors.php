<?php

namespace App\Models;

use CodeIgniter\Model;

class Doctors extends Model
{
    protected $table      = 'doctors';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name', 'description', 'slug', 'dept_ids', 'services', 'education', 'experience', 'role', 'image', 'visibility', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
