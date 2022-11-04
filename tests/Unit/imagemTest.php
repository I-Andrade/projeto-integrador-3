<?php

namespace Tests\Unit;

use App\Models\blog;
use App\Models\categoria;
use App\Models\imagem;
use App\Models\portifolio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class imagemTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_create_imagem()
    {
        $qtde = 20;
        portifolio::factory()->count($qtde)->create();
        imagem::factory()->count($qtde)->create();
        $imagens = imagem::all();
        $this->assertCount($qtde,$imagens);
        $this->assertNotEmpty($imagens->first->image);
    }
}
