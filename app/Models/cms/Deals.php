<?php

namespace App\Models\cms;

use CodeIgniter\Model;

class Deals extends Model
{
    protected $table      = 'cms_deals';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['property_uuid', 'visibility', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';

    public function getPublic()
    {
        $this->builder()->where('visibility', 'Public');

        return $this;
    }
}
