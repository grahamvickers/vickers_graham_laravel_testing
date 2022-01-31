<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Carousel;

class CarouselFunctionalityTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Testing that users can see the carousels view and create a clown 
     *
     * @return void
     */
    public function test_carousel_view_get_success()
    {

        $response = $this->call('GET', '/carousels');

        $this->assertEquals(200, $response->status());
        
    }

    use RefreshDatabase;
    /**
     * Testing that users can post carousels data
     *
     * @return void
     */
    public function test_carousels_view_post_success()
    {
        $response = $this->call('POST', '/carousels', [
            'seat_type' => 'Hard Plastic unicorns with a bacteria lined pole to hold on to!',
            'price_per_ride' => '0.25 ETH',
            'description' => 'Have you ever been on a Carousel before? Well no worries, here at Dreamland Amusements we put the dream in Dreamland!'
        ]);
        
        $this->assertEquals(201, $response->status());

    }
}
