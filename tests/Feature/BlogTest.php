<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_post_id_get_request(){
        $response = $this->get('/blog/7');

        $response->assertStatus(200);
    }

    public function test_get_unexisted_blog(){
        $response = $this->get('/blog/100');

        $response->assertStatus(404);
    }

    public function test_blog_response(){
        $response = $this->get('/blog/7');

        $response->assertViewHas('blog');
    }
}
