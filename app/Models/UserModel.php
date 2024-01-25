<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';


    protected $allowedFields = ['username', 'firstname', 'lastname', 'telephone', 'about', "location", 'profile_url', 'email', 'password', 'user_role','sub_role', 'in_active', 'branch', 'is_logged', 'token', 'conn_id','authenticator_secret'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
