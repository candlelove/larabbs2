<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
<<<<<<< HEAD
        $sentence = $this->faker->sentence();
        return [
            'title' => $sentence,
            'body'  => $this->faker->text(),
            'excerpt'=> $sentence,
            'user_id'=> $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'category_id' => $this->faker->randomElement([1,2,3,4]),

=======
        return [
            // $this->faker->name,
>>>>>>> 1a55da6e86835d22ff4e1b25ce1da26b5a93b07c
        ];
    }
}
