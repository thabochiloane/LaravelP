<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('surname');
			$table->string('idNumber');
			$table->string('mobileNumber');
			$table->string('email');
			$table->string('dateOfBirth');
			$table->string('language');
			$table->string('interests');			
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
        Schema::drop('user_data');
    }
}
