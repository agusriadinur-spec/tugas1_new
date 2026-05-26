<?php

namespace Database\Factories;

use App\Models\Peserta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'nama' => fake()->name(),
        'umur' => fake()->numberBetween(16, 35),
        'kategori' => fake()->randomElement(['Vokal', 'Tari', 'Akting', 'Musik', 'Drama']),
        'nomor_telp' => fake()->phoneNumber(),
        'pengalaman' => fake()->paragraph(2),
    ];
}
