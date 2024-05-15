<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCarteModel extends Model
{
    use HasFactory;

    protected $table = 'lignecarte';

    public function facture()
    {
        return $this->belongsTo(Facture::class, 'idFac', 'idFac');
    }

    public function clientCarte()
    {
        return $this->belongsTo(ClientCarte::class, 'idCarte', 'matr');
    }
}
