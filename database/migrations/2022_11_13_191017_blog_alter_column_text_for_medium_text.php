<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogAlterColumnTextForMediumText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function($table){
            $table->mediumText('text')->nullable()->change();
            $table->string('image')->nullable()->change();
            $table->string('image_name')->nullable()->change();
            $table->string('link_text')->nullable()->change();
            $table->string('link_url')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
