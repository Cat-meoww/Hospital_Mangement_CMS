<?php

namespace App\Models;

use CodeIgniter\Model;

class Contact_enquiries extends Model
{
    protected $table      = 'contact_enquiries';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name', 'email', 'telephone', 'subject', 'comments'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
