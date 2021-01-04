<?php

namespace Database\Factories;

use App\Models\Noticias;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticiasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(2),
            'autorId' => $this->faker->randomElement([1,2,3,4,5]),
            'fecha' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'contenido' => $this->faker->text,
            'imagen'=> $this->faker->imageUrl($width = 640, $height = 480),
            'categoriaid'=> $this->faker->randomElement([1,2,3])
 
        ];
    }
}
