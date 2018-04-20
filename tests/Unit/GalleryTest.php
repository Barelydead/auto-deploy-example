<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Gallery\Gallery as Gallery;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConstructor()
    {
        $gallery = new \App\Gallery\Gallery();

        $this->assertEquals(gettype($gallery->getHtmlGrid()), "string");
    }
}
