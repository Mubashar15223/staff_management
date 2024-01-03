<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->unsignedBigInteger('catogory_id');
           // $table->foreign('category_id')->references('id')->on('categories');
            $table->string('description');
            $table->string('key_features');
            $table->string('image');
            $table->unsignedBigInteger('server_id');
            $table->foreign('server_id')->references('id')->on('servers');
            $table->unsignedBigInteger('theme_id');
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->unsignedBigInteger('plugin_id');
            $table->foreign('plugin_id')->references('id')->on('plugins');
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->unsignedBigInteger('claim_id');
            $table->foreign('claim_id')->references('id')->on('claims');
            $table->unsignedBigInteger('country_audience_id');
            //$table->foreign('country_audience_id')->references('id')->on('country_audience');
            $table->string('review');
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
        Schema::dropIfExists('projects');
    }
};
