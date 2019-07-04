<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRapbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('URAIAN_RAPB');
            $table->string('KATEGORI_RAPB');
            $table->string('SEMESTER');
            $table->integer('JML_MHS');
            $table->string('JML_SKS');
            $table->string('BESARNYA');
            $table->string('JML_100');
            $table->string('JML_90');
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
        Schema::dropIfExists('rapb');
    }
}
