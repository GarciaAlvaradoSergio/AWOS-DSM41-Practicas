<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity;
use App\Models\Status;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subactivity>
 */
class SubactivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'actividad_id'=> Activity::all()->random()->id,
            'estado_id'=> Status::all()->random()->id,
    		'nombre'=> $this->faker->word()
        ];
    }
}
