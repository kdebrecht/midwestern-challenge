<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $images=['Talkie.png', 'Shield.png', 'Rabbit.png'];

        return [
            //
            'title' => substr($this->faker->sentence(3),0, 50),
            'content' => $this->faker->sentence,
            'image_url' => '/images/' . $images[rand(0,2)],
            'display_order' => rand(1,3)
        ];
    }
}
