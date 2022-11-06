<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

            // ... Some Truncate Query
            \App\Models\User::truncate();
            \App\Models\categoria::truncate();
            \App\Models\blog::truncate();
            \App\Models\Wallpaper::truncate();
            \App\Models\portifolio::truncate();
            \App\Models\imagem::truncate();

        Schema::enableForeignKeyConstraints();

        \App\Models\User::factory(10)->create();
        \App\Models\categoria::factory(8)->create();
        \App\Models\blog::factory(10)->create();
        \App\Models\Wallpaper::factory(10)->create();
        \App\Models\portifolio::factory(10)->create();
        \App\Models\imagem::factory(400)->create();
    }
}
