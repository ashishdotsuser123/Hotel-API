<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $supplier = ['Own', 'HotelBeds', 'SunHotels'];
        return [
            'name' => $this->faker->name(),
            'rating' => rand(1,5),
            'address' => $this->faker->address(),
            'supplier' => $supplier[rand(0,2)],
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ];
    }
}
