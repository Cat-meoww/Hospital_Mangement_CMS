<?php

namespace App\Models\cms;

use CodeIgniter\Model;

class Cms_faq extends Model
{
    protected $table      = 'cms_faq';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['question', 'answer', 'visibility', 'created_by'];

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
