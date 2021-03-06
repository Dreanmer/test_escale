<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('access_logs', function (Blueprint $table) {
			$table->increments('id');
			$table->string('code');
			$table->string('cep');
			$table->string('city');
			$table->string('ip');
			$table->string('approximate_location');
			$table->string('real_location');
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
    }
}
