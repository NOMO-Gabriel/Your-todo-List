<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieModel extends Model
{
    use HasFactory;

    protected $table = 'categorie';

    public function produits()
    {
        return $this->hasMany(Produit::class, 'idCategorie', 'idCat');
    }
}
