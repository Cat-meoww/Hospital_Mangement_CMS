<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceBookings extends Model
{
    protected $table      = 'service_bookings';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['branch', 'service', 'name', 'message', 'phone', 'booking_date', 'follow_date', 'revenue', 'status'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
