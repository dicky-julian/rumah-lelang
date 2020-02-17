<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLelangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lelang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lelang', 255)->unique();
            $table->string('deskripsi_lelang', 2555);
            $table->integer('start_bid');
            $table->integer('min_bid');
            $table->string('kategori');
            $table->integer('bid_now')->nullable();
            $table->integer('buy_now');
            $table->bigInteger('timeout');
            $table->string('foto_lelang', 2555);
            $table->unsignedBigInteger('id_penjual');
            $table->unsignedBigInteger('id_pembeli')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('id_penjual')->references('id')->on('tb_user');
            $table->foreign('id_pembeli')->references('id')->on('tb_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_lelang');
    }
}
