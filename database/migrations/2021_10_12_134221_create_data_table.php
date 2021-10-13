<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('pendidikan1');
            $table->string('jumlah1');
            $table->string('tersertifikasi1');
            $table->string('pendidikan2');
            $table->string('jumlah2');
            $table->string('tersertifikasi2');
            $table->string('tahun');
            $table->string('kelas1');
            $table->string('kelas2');
            $table->string('kelas3');
            $table->string('kelas4');
            $table->string('kelas5');
            $table->string('kelas6');
            $table->string('jumlah');
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
        Schema::dropIfExists('data');
    }
}
