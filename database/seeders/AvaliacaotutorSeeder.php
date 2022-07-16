<?php

namespace Database\Seeders;


use App\Models\Avaliacaotutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvaliacaotutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Avaliacaotutor::factory()->create();
        }
    }
}
