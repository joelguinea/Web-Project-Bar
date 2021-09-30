<?php

namespace Database\Factories;

use App\Models\Bookings;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->word,
        'Lastname' => $this->faker->word,
        'Location' => $this->faker->word,
        'Hotelname' => $this->faker->word,
        'Date' => $this->faker->word,
        'RoomType' => $this->faker->word,
        'Citizenship' => $this->faker->word,
        'Gender' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
