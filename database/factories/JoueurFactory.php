<?php

namespace Database\Factories;

use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joueur>
 */
class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *  Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedInteger('age');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('pays');
            $table->foreignId('position_id')->nullable()->constrained('positions')->nullOnDelete();
            $table->foreignId('equipe_id')->nullable()->constrained('equipes')->nullOnDelete();
            $table->foreignId('genre_id')->nullable()->constrained('genres')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }
     * 
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nom'    => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(18,40),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'pays' => $this->faker->country(),
            'position_id' => Position::inRandomOrder()->value('id'),
            'equipe_id' => Equipe::inRandomOrder()->value('id'),
            'genre_id' => Genre::inRandomOrder()->value('id'),
            'user_id'=> User::

        
        ];
    }
}
