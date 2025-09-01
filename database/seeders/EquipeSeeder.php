<?php

namespace Database\Seeders;

use App\Models\Equipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * $table->string('nom')->unique();

     */
    public function run(): void
    {
        Equipe::insert([
            [
                "nom" => "Al Nasser",
                "ville" => "Riyad",
                "pays" => "Arabie Saoudite",
                "image" => "https://upload.wikimedia.org/wikipedia/fr/archive/9/9d/20241215171540%21Logo_Al-Nassr.png",
                "genre_id" => 1,
                "continent_id" => 3
            ],
            [
                "nom" => "Manchester United",
                "ville" => "Manchester",
                "pays" => "Angleterre",
                "image" => "https://upload.wikimedia.org/wikipedia/fr/thumb/b/b9/Logo_Manchester_United.svg/2021px-Logo_Manchester_United.svg.png",
                "genre_id" => 1,
                "continent_id" => 4
            ],
            [
                "nom" => "Santos",
                "ville" => "Santos",
                "pays" => "Brésil",
                "image" => "https://upload.wikimedia.org/wikipedia/fr/thumb/8/8d/Logo_Santos_Futebol_Club_2023.svg/1672px-Logo_Santos_Futebol_Club_2023.svg.png",
                "genre_id" => 1,
                "continent_id" => 2
            ],
            [
                "nom" => "Central Coast Mariners",
                "ville" => "Gosford",
                "pays" => "Australie",
                "image" => "https://upload.wikimedia.org/wikipedia/fr/f/f6/CentralCoastMariners-logo.png",
                "genre_id" => 2,
                "continent_id" => 5
            ],

        ]);
    }
}
