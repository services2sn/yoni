<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('addresses', function(Blueprint $table)
		{
			$table->foreign('city_id', 'city_id')->references('id')->on('cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'user_id_4')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('addresses', function(Blueprint $table)
		{
			$table->dropForeign('city_id');
			$table->dropForeign('user_id_4');
		});
	}

}
