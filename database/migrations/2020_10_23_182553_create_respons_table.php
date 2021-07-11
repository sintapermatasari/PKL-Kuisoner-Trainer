<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('training_id');
            $table->string('nama');
            $table->string('no_rek');
            $table->string('email');
            $table->string('no_telp');
            $table->tinyInteger('kecepatan_pembayaran');
            $table->string('kp_komen');
            $table->tinyInteger('fasilitas_pendukung');
            $table->string('fp_komen');
            $table->tinyInteger('layanan_panitia');
            $table->string('lp_komen');
            $table->string('saran_topik');
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
        Schema::dropIfExists('respons');
    }
}
