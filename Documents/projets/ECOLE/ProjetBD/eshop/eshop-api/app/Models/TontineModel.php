<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TontineModel extends Model
{
    use HasFactory;

    protected $table = 'tontine';

    public function gestionnaire()
    {
        return $this->belongsTo(Gestionnaire::class, 'idGest', 'idGest');
    }

    public function carteClient()
    {
        return $this->belongsTo(ClientCarte::class, 'idCarte', 'matr');
    }
}
