<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function(Blueprint $table) {
            $table->integer('id', true);
			$table->string('title');
            $table->boolean('item_type');
			$table->integer('item_id');
			$table->boolean('content_type');
			$table->boolean('pos');
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
        Schema::drop('menu_items');
    }

}
