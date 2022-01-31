<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Carousel;

class CarouselTest extends TestCase
{
    /**
     * Test that a new carousel will be stored successfully 
     *
     * @return void
     */
    public function test_created_carousel_store_data_successfully()
    {     
        // this is the demo carousel creation 
        $data = [
            'seat_type' => 'Hard Plastic unicorns with a bacteria lined pole to hold on to!',
            'price_per_ride' => '0.25 ETH',
            'description' => 'Have you ever been on a Carousel before? Well no worries, here at Dreamland Amusements we put the dream in Dreamland!'   
        ];

        // lets check if we can store the data
        $carousel = new Carousel($data);

        // store each piece of the inserted data
        $this->assertNotEmpty($carousel);
        $this->assertEquals($data['seat_type'], $carousel->seat_type);
        $this->assertEquals($data['price_per_ride'], $carousel->price_per_ride);
        $this->assertEquals($data['description'], $carousel->description);

    }
}
