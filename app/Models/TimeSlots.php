<?php

namespace App\Models;

use CodeIgniter\Model;

class TimeSlots extends Model
{
    protected $table      = 'time_slots';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['start_time', 'end_time',];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
