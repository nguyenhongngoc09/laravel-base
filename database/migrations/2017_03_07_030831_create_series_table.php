<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function(Blueprint $table) {
            $table->integer('id', true);
			$table->boolean('item_type');
			$table->string('title');
			$table->text('description')->nullable();
			$table->boolean('content_type');
			$table->boolean('is_public');
			$table->integer('created_by');
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
        Schema::drop('series');
    }

}
