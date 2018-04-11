<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemStatisticsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_statistics', function(Blueprint $table) {
            $table->bigInteger('id', true);
			$table->boolean('item_type');
			$table->integer('item_id');
			$table->integer('view_count')->nullable()->default(0);
			$table->integer('like_count')->nullable()->default(0);
			$table->integer('share_count')->nullable()->default(0);
			$table->integer('favorite_count')->nullable()->default(0);
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
        Schema::drop('item_statistics');
    }

}
