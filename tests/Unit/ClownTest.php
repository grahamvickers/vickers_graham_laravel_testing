<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Clown;

class ClownTest extends TestCase
{
    /**
     * Test if users can create and submit a new clown
     *
     * @return void
     */
    public function test_created_clown_store_data_successfully()
    {
         // this is the demo clown creation 
         $data = [
            'name' => 'Graham "The Man" Vickers',
            ];

        // lets check if we can store the data
        $clown = new Clown($data);

        // store each piece of the inserted data
        $this->assertNotEmpty($clown);
        $this->assertEquals($data['name'], $clown->name);
    }
}
