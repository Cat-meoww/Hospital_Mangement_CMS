<?php

namespace App\Models;

use CodeIgniter\Model;

class ResetPwd extends Model
{
    protected $table      = 'reset_password';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['uuid', 'user_id', 'expired_on', 'useragent', 'ip_address','is_changed'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
