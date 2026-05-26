<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama'          => $this->faker->name(),
            'umur'          => $this->faker->numberBetween(16, 35),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'no_hp'         => $this->faker->phoneNumber(),
            'email'         => $this->faker->unique()->safeEmail(),
            'kategori'      => $this->faker->randomElement(['Nyanyi', 'Tari', 'Musik', 'Akting', 'Magic']),
            'status'        => 'Pending',
        ];
    }
}