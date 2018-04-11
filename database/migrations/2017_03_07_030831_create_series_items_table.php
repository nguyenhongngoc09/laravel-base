<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesItemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_items', function(Blueprint $table) {
            $table->bigInteger('id', true);
			$table->integer('series_id');
			$table->integer('item_id');
			$table->boolean('month_amount');
			$table->integer('pos');
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
        Schema::drop('series_items');
    }

}
