<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FournisseurModel extends Model
{
    use HasFactory;

    protected $table = 'fournisseur';

    public function achatsFournisseur()
    {
        return $this->hasMany(AchatFournisseur::class, 'idFour', 'idFour');
    }
}
