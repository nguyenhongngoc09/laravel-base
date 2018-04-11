<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function(Blueprint $table) {
            $table->integer('user_id')->primary();
			$table->string('nickname');
			$table->string('firstname');
			$table->string('lastname');
			$table->boolean('gender');
			$table->date('birthday');
			$table->string('job');
			$table->integer('plan_id');
			$table->dateTime('plan_regist_date');
			$table->integer('payment_method_id')->nullable();
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
        Schema::drop('user_profiles');
    }

}
