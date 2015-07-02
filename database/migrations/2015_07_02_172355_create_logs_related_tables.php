<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsRelatedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

		Schema::drop('access_logs');

		Schema::create('access_log', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('visitor_id');
			$table->string('ip');
			$table->string('approximate_location');
			$table->string('real_location');
			$table->timestamps();
		});

		Schema::create('visitor', function (Blueprint $table) {
			$table->increments('id');
			$table->string('code');
			$table->string('cep');
			$table->string('city');
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
		Schema::drop('access_logs');
		Schema::drop('visitors');
    }
}
