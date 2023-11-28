<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservedSlots extends Model
{
    protected $table      = 'reserved_slots';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';

    protected $allowedFields = ['doctor_id', 'booking_date', 'slot_id','booking_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
