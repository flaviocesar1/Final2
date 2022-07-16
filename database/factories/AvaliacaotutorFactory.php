<?php

namespace Database\Factories;

use App\Models\Avaliacao;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avaliacaotutor>
 */
class AvaliacaotutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'avaliacao_id' => Avaliacao::all()->random(),
            'tutor_id' => Tutor::all()->random()->id,
        ];
    }
}
