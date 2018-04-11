<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHistoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_histories', function(Blueprint $table) {
            $table->bigInteger('id', true);
			$table->integer('user_id');
			$table->boolean('item_type');
			$table->integer('item_id');
			$table->integer('playback_elapsed_time');
			$table->integer('view_times')->nullable();
			$table->boolean('rating')->nullable();
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
        Schema::drop('user_histories');
    }

}
