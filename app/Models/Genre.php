<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /** @use HasFactory<\Database\Factories\GenreFactory> */
    use HasFactory;

    protected $fillable = ['genre'];

    public function joueur()
    {
        return $this->hasMany(Joueur::class);
    }

    public function equipe()
    {
        return $this->hasMany(Equipe::class);
    }
}
