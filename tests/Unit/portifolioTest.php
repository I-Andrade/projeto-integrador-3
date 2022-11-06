<?php

namespace Tests\Unit;

use App\Models\imagem;
use App\Models\portifolio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class portifolioTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_create_portfolio()
    {
        $qtde = 20;
        portifolio::factory()->count($qtde)->create();
        $portifolios = portifolio::all();
        $this->assertCount($qtde,$portifolios);
        $this->assertNotEmpty($portifolios->first->image);
    }
}
