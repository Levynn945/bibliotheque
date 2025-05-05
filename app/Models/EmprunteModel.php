<?php

namespace App\Models;

use CodeIgniter\Model;

class EmprunteModel extends Model
{
    protected $table = 'emprunte';
    protected $primaryKey = null;
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        'matricule_abonne',
        'cote_exemplaire',
        'date_emprunt',
        'date_retour',
        'estRenouvele'
    ];
}
