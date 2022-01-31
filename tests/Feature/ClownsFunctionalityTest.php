<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Clown;

class ClownsFunctionalityTest extends TestCase
{   
    use RefreshDatabase;
    /**
     * Testing that users can see the clowns view and create a clown 
     *
     * @return void
     */
    public function test_clown_view_get_success()
    {

        $response = $this->call('GET', '/clowns');

        $this->assertEquals(200, $response->status());
        
    }

    use RefreshDatabase;
    /**
     * Testing that users can post clown data
     *
     * @return void
     */
    public function test_clown_view_post_success()
    {
        $response = $this->call('POST', '/clown', ['name' => 'Graham "The Man" Vickers']);
        
        $this->assertEquals(201, $response->status());

    }
}
