<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingActions extends Model
{
    protected $table      = 'booking_actions';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['booking_id', 'action', 'comments', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
