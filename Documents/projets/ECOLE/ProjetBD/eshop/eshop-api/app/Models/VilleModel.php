<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VilleModel extends Model
{
    use HasFactory;

    protected $table = 'ville';

    public function expeditions()
    {
        return $this->hasMany(Expedition::class, 'idVille', 'idVille');
    }
}
