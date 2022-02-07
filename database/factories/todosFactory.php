<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class todosFactory extends Factory
{

    protected $model = \App\Models\Todos::class;
    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' =>$this->faker->text(100),
            'completed' => false
        ];
    }
}
