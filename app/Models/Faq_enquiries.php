<?php

namespace App\Models;

use CodeIgniter\Model;

class Faq_enquiries extends Model
{
    protected $table      = 'faq_enquiries';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['name', 'email',  'question'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
