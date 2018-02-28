<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{

    /**
     * Test status code on homepage
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test status code on contact
     *
     * @return void
     */
    public function testContact()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    /**
     * test search page with valid query
     *
     * @return void
     */
    public function testSearch()
    {
        $response = $this->get('/search?search=fire');

        $response
            ->assertStatus(200)
            ->assertSeeText('FIRE RETARDANT');
    }

    /**
     * test search page with invald query
     *
     * @return void
     */
    public function testInvalidSearch()
    {
        $response = $this->get('/search?search=QWErtyqwe');

        $response
            ->assertStatus(200)
            ->assertSeeText('QWErtyqwe')
            ->assertDontSeeText('FIRE RETARDANT');
    }

    /**
     * Check that admin is unreachable when not logged in
     *
     * @return void
     */
    public function testAdmin()
    {
        $response = $this->get('/admin');

        $response
            ->assertRedirect('/login');
    }
}
