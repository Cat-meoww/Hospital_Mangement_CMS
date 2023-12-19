<?php

namespace App\Models;

use CodeIgniter\Model;

class Routes extends Model
{
    protected $table      = 'routes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['method', 'route', 'name', 'handler'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
