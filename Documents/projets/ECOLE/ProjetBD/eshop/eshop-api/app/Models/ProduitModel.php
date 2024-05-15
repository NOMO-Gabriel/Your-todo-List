<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitModel extends Model
{
    use HasFactory;

    protected $table = 'produit';

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'idCategorie', 'idCat');
    }

    public function lignesFacture()
    {
        return $this->hasMany(LigneFacture::class, 'codePro', 'codePro');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'codePro', 'codePro');
    }
}
