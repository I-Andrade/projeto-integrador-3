<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagram_api', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id');
            $table->string('client_secret');
            $table->string('redirect_uri');
            $table->bigInteger('user_id')->nullable();
            $table->string('username')->nullable();
            $table->string('access_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instagram_api');
    }
}
