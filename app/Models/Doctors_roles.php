<?php

namespace App\Models;

use CodeIgniter\Model;

class Doctors_roles extends Model
{
    protected $table      = 'doctors_roles';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name', 'description',  'visibility', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
