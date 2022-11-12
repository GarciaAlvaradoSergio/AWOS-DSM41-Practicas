<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstNameMale(),
            'apellido' => $this->faker->lastName(),
            'usuario' => $this->faker->userName(),
            'correo' => $this->faker->email(),
            'contraseña' => $this->faker->password(),
        ];
    }
}
