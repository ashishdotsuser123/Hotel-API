<?php

namespace Database\Factories;

use App\Models\HotelReview;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HotelReview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'hotel_id' => rand(1,20),
            'description' => $this->faker->text(),
            'rating' => rand(1,5),
            'author' => $this->faker->name(),
            'created_at' => date('Y-m-d H:i:s'),
        ];
    }
}
