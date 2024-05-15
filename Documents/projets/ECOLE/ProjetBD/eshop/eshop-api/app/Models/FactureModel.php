<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactureModel extends Model
{
    use HasFactory;

    protected $table = 'facture';

    public function caissiere()
    {
        return $this->belongsTo(Gestionnaire::class, 'idCaissiere', 'idGest');
    }
}
