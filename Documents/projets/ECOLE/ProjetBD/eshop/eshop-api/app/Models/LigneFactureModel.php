<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneFactureModel extends Model
{
    use HasFactory;

    protected $table = 'lignefacture';

    public function facture()
    {
        return $this->belongsTo(Facture::class, 'idFac', 'idFac');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'codePro', 'codePro');
    }
}
