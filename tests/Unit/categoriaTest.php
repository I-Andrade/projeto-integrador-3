<?php

namespace Tests\Unit;

use App\Models\categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class categoriaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_create_categoria()
    {
        $qtde = 20;
        categoria::factory()->count($qtde)->create();
        $categorias = categoria::all();
        $this->assertCount($qtde,$categorias);
        $this->assertNotEmpty($categorias->first->description);
    }
}
