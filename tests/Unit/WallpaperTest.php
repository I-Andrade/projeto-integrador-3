<?php

namespace Tests\Unit;


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
        Wallpaper::factory()->count($qtde)->create();
        
        $wallpapers = Wallpaper::all();
        $this->assertCount($qtde,$wallpapers);
        $this->assertNotEmpty($wallpapers->first->name);
    }
}
