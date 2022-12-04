<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->integer('id_karyawan');
            $table->string('bulan',50);
            $table->integer('sakit');
            $table->integer('izin');
            $table->integer('alpha');
            $table->double('total_tunjangan');
            $table->double('gaji_kotor');
            $table->double('pajak');
            $table->double('gaji_bersih');
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
        Schema::dropIfExists('gaji');
    }
}
