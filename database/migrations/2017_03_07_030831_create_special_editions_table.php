<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialEditionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_editions', function(Blueprint $table) {
            $table->integer('id', true);
			$table->string('title');
			$table->text('description')->nullable();
			$table->boolean('content_type');
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
        Schema::drop('special_editions');
    }

}
