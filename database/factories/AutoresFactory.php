<?php

namespace Database\Factories;

use App\Models\Autores;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AutoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Autores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'nacionalidad' => $this->faker->country,
        ];
    }
}
