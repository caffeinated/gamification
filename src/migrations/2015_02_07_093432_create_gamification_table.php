<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamificationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gamification', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('points')->default(0);
			$table->integer('level')->default(1);
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on(Config::get('auth.model'))->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('gamification');
	}
}