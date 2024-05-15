<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatFournisseurModel extends Model
{
    use HasFactory;

    protected $table = 'achatfournisseur';

    // Déclaration de la relation avec le modèle Fournisseur
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'idFour', 'idFour');
    }
}
