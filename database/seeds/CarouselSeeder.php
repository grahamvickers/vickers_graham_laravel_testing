<?php

use App\Carousel;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * @var Faker
     */
    private $faker;

    /**
     * @var array
     */
    private $carousels;

    /**
     * instantiate CarouselSeeder
     */
    public function __construct() {
        $this->faker = Factory::create();
        $this->carousels = [
            ['seat_type' => 'horses', 'price_per_ride' => 10, 'description' => $this->faker->paragraph],
            ['seat_type' => 'zebras', 'price_per_ride' => 5, 'description' => $this->faker->paragraph],
            ['seat_type' => 'tigers', 'price_per_ride' => 15, 'description' => $this->faker->paragraph],
            ['seat_type' => 'dragons', 'price_per_ride' => 25, 'description' => $this->faker->paragraph]
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->carousels as $carousel) {
            Carousel::firstOrCreate($carousel);
        }
    }
}
