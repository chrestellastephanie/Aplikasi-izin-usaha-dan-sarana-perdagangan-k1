<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelIzinUsaha extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('izin_usaha', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('no_izin');
			$table->string('jenis_usaha');
			$table->string('nama_perusahaan');
			$table->timestamp('tanggal_mulai_berlaku');
			$table->timestamp('tanggal_akhir_masa_berlaku');
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
		Schema::drop('izin_usaha');
	}

}
