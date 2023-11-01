<?php

namespace App\Models;

use CodeIgniter\Model;

class Enquiry_status extends Model
{
    protected $table      = 'enquiry_status';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $dateFormat = 'datetime';
}
