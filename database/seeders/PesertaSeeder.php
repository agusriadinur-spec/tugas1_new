<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    public function run(): void
    {
        Peserta::factory(30)->create();
    }
}