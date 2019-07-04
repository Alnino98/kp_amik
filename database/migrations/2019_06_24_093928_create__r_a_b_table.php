<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRABTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RAB', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('KODE_POS');
            $table->string('KATEGORI');
            $table->integer('KODE_SUB');
            $table->string('URAIAN');
            $table->string('JML_MATA_ANGG');
            $table->string('JML_POS');
            $table->string('JML_TOTAL');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RAB');
    }
}
