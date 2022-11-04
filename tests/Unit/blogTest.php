<?php

namespace Tests\Unit;

use App\Models\blog;
use App\Models\categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class blogTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_create_blog()
    {
        $qtde = 20;
        categoria::factory()->count($qtde)->create();
        blog::factory()->count($qtde)->create();
        $blogs = blog::all();
        $this->assertCount($qtde,$blogs);
        $this->assertNotEmpty($blogs->first->title);
    }
}
