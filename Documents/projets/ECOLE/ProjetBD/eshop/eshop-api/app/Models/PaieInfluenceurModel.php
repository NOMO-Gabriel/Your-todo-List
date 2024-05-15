<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaieInfluenceurModel extends Model
{
    use HasFactory;

    protected $table = 'paieinfluenceur';

    public function influenceur()
    {
        return $this->belongsTo(Influenceur::class, 'idInf', 'idInf');
    }
}
