<?php

namespace App\Models;

use CodeIgniter\Model;

class DatabaseModel extends Model
{
    public function contact()
    {
        return $this->db->table('my_contact')
            ->select('*')
            ->get()
            ->getResultArray();
    }
}
