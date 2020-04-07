<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualitiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualities', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->integer('type');

            $table->timestamps();
        });

        Schema::create('user_qualities', function(Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('quality_id');

            $table->primary(['user_id', 'quality_id']);
        });

        Schema::create('request_qualities', function(Blueprint $table) {
            $table->bigInteger('request_id');
            $table->bigInteger('project_id');
            $table->bigInteger('quality_id');

            $table->primary(['request_id', 'quality_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualities');
        Schema::dropIfExists('user_qualities');
        Schema::dropIfExists('request_qualities');
    }
}
