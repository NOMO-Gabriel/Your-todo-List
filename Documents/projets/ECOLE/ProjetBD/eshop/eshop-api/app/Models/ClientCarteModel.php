<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCarteModel extends Model
{
    use HasFactory;

    protected $table = 'clientcarte';

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'idVille', 'idVille');
    }

    public function lignesCarte()
    {
        return $this->hasMany(LigneCarte::class, 'idCarte', 'matr');
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'idCarte', 'matr');
    }
}
