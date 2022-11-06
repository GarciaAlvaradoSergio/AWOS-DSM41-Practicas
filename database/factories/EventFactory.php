<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Status;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombreEvento' => $this->faker->word(),
            'categoria_id'=> Category::all()->random()->id,
        	'fecha'=> $this->faker->date($format = 'Y-m-d'),
        	'estado_id'=> Status::all()->random()->id
        ];
    }
}
