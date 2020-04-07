<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('is_active');
            
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();

            $table->integer('negative_responses')->default(0);
            $table->integer('positive_responses')->default(0);
            $table->integer('active_helpers')->default(0);

            $table->integer('coordinator');
            $table->integer('max_distance');

            $table->bigInteger('address_id');
            $table->bigInteger('project_id');

            $table->timestamps();
        });

        Schema::create('user_requests', function(Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('request_id');

            $table->primary(['user_id', 'request_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
        Schema::dropIfExists('user_requests');
    }
}
