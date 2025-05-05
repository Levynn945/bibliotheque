<?php

namespace App\Models;

use CodeIgniter\Model;

class DemandeModel extends Model
{
    protected $table = 'demande';
    protected $primaryKey = null;
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        'matricule_abonne',
        'code_catalogue',
        'date_demande'
    ];
}
