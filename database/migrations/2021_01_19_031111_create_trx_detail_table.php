<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('id_trx');
            $table->integer('id_p');
            $table->string('kode_p');
            $table->string('nama_p');
            $table->integer('harga');
            $table->string('satuan');
            $table->integer('kuantitas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trx_detail');
    }
}
