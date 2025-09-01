<?php

namespace Database\Seeders;

use App\Models\Joueur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *             $table->string('nom');
            $table->string('prenom');
            $table->unsignedInteger('age');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('pays');
            $table->foreignId('position_id')->nullable()->constrained('positions')->nullOnDelete();
            $table->foreignId('equipe_id')->nullable()->constrained('equipes')->nullOnDelete();
            $table->foreignId('genre_id')->nullable()->constrained('genres')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
     */
    public function run(): void
    {
        Joueur::insert([
            [
                
            ]
        ]);
    }
}
