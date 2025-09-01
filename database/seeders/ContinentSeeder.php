<?php

namespace Database\Seeders;

use App\Models\Continent;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Continent::insert([
            [
                'nom' => 'Afrique',
                'id' => 1
            ],
            [
                'nom' => 'Amériques',
                'id' => 2
            ],
            [
                'nom' => 'Asie',
                'id'=>3
            ],
            [
                'nom' => 'Europe',
                'id' =>4
            ],
            [
                'nom' => 'Océanie',
                'id'=>5
            ],
        ]);

        
    }
}
