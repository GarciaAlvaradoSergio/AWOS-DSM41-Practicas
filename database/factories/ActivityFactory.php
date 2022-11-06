<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Status;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'categoria_id' => Category::all()->random()->id,
            'estado_id'=> Status::all()->random()->id,
        	'titulo'=> $this->faker->word(),
        	'fecha'=> $this->faker->date($format = 'Y-m-d')
        ];
    }
}
