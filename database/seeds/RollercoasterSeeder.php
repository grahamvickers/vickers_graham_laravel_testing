<?php

use App\RollerCoaster;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RollercoasterSeeder extends Seeder
{
    /**
     * @var Faker
     */
    private $faker;

    /**
     * @var array
     */
    private $rollercoasters;

    /**
     * instantiate RollercoasterSeeder
     */
    public function __construct() {
        $this->faker = Factory::create();
        $this->rollercoasters = [
            ['name' => 'Airplan Coaster', 'price_per_ride' => 20, 'description' => $this->faker->paragraph],
            ['name' => 'Candymonium', 'price_per_ride' => 20, 'description' => $this->faker->paragraph],
            ['name' => 'Cedar Creek Mine Ride', 'price_per_ride' => 15, 'description' => $this->faker->paragraph],
            ['name' => 'Colorado Adventure', 'price_per_ride' => 25, 'description' => $this->faker->paragraph]
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->rollercoasters as $rollercoaster) {
            RollerCoaster::firstOrCreate($rollercoaster);
        }
    }
}
