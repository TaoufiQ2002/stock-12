<?php

namespace Database\Factories;

use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fournisseur>
 */
class FournisseurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Fournisseur::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->company,
            'lice' => $this->faker->numerify('#########'),
            'adresse' => $this->faker->address,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'rib' => $this->faker->numerify('########################'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
