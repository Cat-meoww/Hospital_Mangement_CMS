<?php

namespace App\Models;

use CodeIgniter\Model;

class Locations extends Model
{
    protected $table      = 'locations';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['city', 'state', 'slug','visibility','created_by' ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
