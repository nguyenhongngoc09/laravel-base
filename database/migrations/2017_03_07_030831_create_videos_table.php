<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function(Blueprint $table) {
            $table->integer('id', true);
			$table->text('eyecatch_img')->nullable();
			$table->string('title');
			$table->text('description')->nullable();
			$table->boolean('content_type');
			$table->text('path');
			$table->integer('total_time');
			$table->text('thumbnail_1');
			$table->text('thumbnail_2');
			$table->text('thumbnail_3');
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
        Schema::drop('videos');
    }

}
