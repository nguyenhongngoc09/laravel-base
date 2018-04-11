<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialEditionSeriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_edition_series', function(Blueprint $table) {
            $table->bigInteger('id', true);
			$table->integer('special_edition_id');
			$table->integer('series_id');
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
        Schema::drop('special_edition_series');
    }

}
