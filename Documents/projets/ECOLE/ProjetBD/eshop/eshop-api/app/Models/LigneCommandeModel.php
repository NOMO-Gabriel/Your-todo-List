<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommandeModel extends Model
{
    use HasFactory;

    protected $table = 'lignecommande';

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'idCommande', 'idCommande');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'codePro', 'codePro');
    }
}
