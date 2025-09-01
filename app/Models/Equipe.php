<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    /** @use HasFactory<\Database\Factories\EquipeFactory> 
     * 
     * - equipes: id, nom (unique), ville, pays, continent_id (FK)

    */
    use HasFactory;

    protected $fillable = ['nom', 'ville','pays', 'image','continent_id'];


      public function continent()
    {
        return $this->belongsTo(Continent::class);
    }


    
}
