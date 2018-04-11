<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributorProfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributor_profiles', function(Blueprint $table) {
            $table->integer('id', true);
			$table->text('eyecatch_img')->nullable();
			$table->boolean('is_kol');
			$table->string('surname');
			$table->string('name');
			$table->boolean('gender');
			$table->string('job');
			$table->dateTime('birthday');
			$table->string('address');
			$table->text('profile')->nullable();
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
        Schema::drop('contributor_profiles');
    }

}
