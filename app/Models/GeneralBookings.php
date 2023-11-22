<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralBookings extends Model
{
    protected $table      = 'general_bookings';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['branch', 'service', 'name', 'age', 'message', 'phone', 'email', 'booking_date'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
