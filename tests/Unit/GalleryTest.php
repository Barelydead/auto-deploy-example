<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Gallery\Gallery as Gallery;

class GalleryTest extends TestCase
{
    /**
     * Testing class constructor
     *
     * @return void
     */
    public function testConstruct()
    {
        $gallery = new Gallery();

        $this->assertEquals($gallery->rows, 4);
        $this->assertEquals($gallery->columns, 5);

        $gallery = new Gallery(2, 8);

        $this->assertEquals($gallery->rows, 2);
        $this->assertEquals($gallery->columns, 8);
    }

    /**
     * Testing init function
     *
     * @return void
     */
    public function testInit()
    {
        $gallery = new Gallery();
        $this->assertEquals(count($gallery->images), 0);

        $fakeObject = new \stdClass();
        $fakeObject->filename = "test";

        $fakeDataList = [
            $fakeObject,
            $fakeObject,
            $fakeObject
        ];

        $gallery->init($fakeDataList);
        $this->assertEquals(count($gallery->images), 3);
    }
}
