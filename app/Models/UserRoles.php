<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoles extends Model
{
    protected $table      = 'user_role';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['role', 'role_name', 'description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
