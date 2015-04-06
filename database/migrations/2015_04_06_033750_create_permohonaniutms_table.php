<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonaniutmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permohonaniutms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('namaPerusahaan');
			$table->string('alamatPerusahaan');
			$table->string('direkturPerusahaan');
			$table->string('bentukBadanUsaha');
			$table->integer('modalBersih');
			$table->integer('sahamNasional');
			$table->integer('sahamAsing');
			$table->string('suratKepemilikanTempat');
			$table->string('aktaPendirianPerusahaan');
			$table->string('domisili');
			$table->string('amdal');
			$table->string('rencanaMitra');
			$table->timestamp('waktuPengajuan');
			$table->string('status');
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
		Schema::drop('permohonaniutms');
	}

}
