<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Type;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title,
            'slug_title'=>$this->faker->title,
            'content'=>$this->faker->text(),
            'summary'=>$this->faker->text(),
            'images'=>$this->faker->image(),
            'hot'=>$this->faker->randomElement($array = array('0','1')),
            'active'=>$this->faker->randomElement($array = array('0','1')),
            
            'type_id'=>Type::all()->random()->id
        ];
    }
}
