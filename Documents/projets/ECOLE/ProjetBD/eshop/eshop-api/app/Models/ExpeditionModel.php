<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpeditionModel extends Model
{
    use HasFactory;

    protected $table = 'expedition';

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'idVille', 'idVille');
    }
}
