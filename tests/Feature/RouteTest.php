<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{

    /**
     * Test status code on location page
     *
     * @return void
     */
    public function testLocation()
    {
        $response = $this->get('/location');

        $response->assertStatus(200);
    }

}
