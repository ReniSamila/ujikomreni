<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelicashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belicashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('kode');
            $table->string('no_ktp');
            $table->unsignedbigInteger('id_motor');
            $table->date('tanggal_cash');
            $table->double('bayar_cash');

            $table->foreign('id_motor')->references('id')->on('motors')->onDelete('cascade');
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
        Schema::dropIfExists('belicashes');
    }
}
