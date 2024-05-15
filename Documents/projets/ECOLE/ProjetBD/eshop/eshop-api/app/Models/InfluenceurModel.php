<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfluenceurModel extends Model
{
    use HasFactory;

    protected $table = 'influenceur';

    public function paiements()
    {
        return $this->hasMany(PaieInfluenceur::class, 'idInf', 'idInf');
    }
}
