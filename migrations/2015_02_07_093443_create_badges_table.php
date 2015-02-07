<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('badges', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('slug')->unique();
			$table->text('description')->nullable();
			$table->integer('points')->default(1);
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
		Schema::dropIfExists('badges');
	}
}