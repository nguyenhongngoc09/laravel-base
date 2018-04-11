<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParagraphsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paragraphs', function(Blueprint $table) {
            $table->integer('id', true);
			$table->integer('article_id');
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->text('img_path')->nullable();
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
        Schema::drop('paragraphs');
    }

}
