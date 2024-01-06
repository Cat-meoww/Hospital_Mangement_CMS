<?php

namespace App\Models;

use CodeIgniter\Model;

class RoutePermissions extends Model
{
    protected $table      = 'route_permissions';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['role_id', 'route_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
