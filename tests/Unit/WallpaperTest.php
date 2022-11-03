<?php

namespace Tests\Unit;

use App\Models\categoria;
use App\Models\Wallpaper;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WallpaperTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_create_wallpapers()
    {
        $qtde = 20;
        categoria::factory()->count($qtde)->create();
        Wallpaper::factory()->count($qtde)->create();
        // ajustar esse teste
        $wallpapers = Wallpaper::all();
        $this->assertCount($qtde,$wallpapers);
        $this->assertNotEmpty($wallpapers->first->name);
        //$this->assertEmpty($wallpapers);
    }
}
