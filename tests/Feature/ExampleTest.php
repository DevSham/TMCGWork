<?php

namespace Tests\Feature;

use Tests\TestCase;
use  App\Posts;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
