<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeModel extends Model
{
    use HasFactory;

    protected $table = 'commande';

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'idVille', 'idVille');
    }

    public function lignesCommande()
    {
        return $this->hasMany(LigneCommande::class, 'idCommande', 'idCommande');
    }
}
