<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoBookingDoctors extends Model
{
    protected $table      = 'video_booking_doctors';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['doctor', 'slots',  'visibility'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
