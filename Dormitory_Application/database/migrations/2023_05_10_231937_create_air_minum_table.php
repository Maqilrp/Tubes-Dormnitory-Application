<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('air_minum', function (Blueprint $table) {
            $table->id();

             //foreign key table user
             $table->unsignedBigInteger('id_user');
             $table->foreign('id_user')->references('id')->on('users');
             //end foreign key table user

             //foreign key table gedung
             $table->unsignedBigInteger('id_gedung');
             $table->foreign('id_gedung')->references('id')->on('gedung');
             //end foreign key table gedung

             //foreign key table transaksi
            //  $table->unsignedBigInteger('id_transaksi');
            //  $table->foreign('id_transaksi')->references('id')->on('transaksi');
             //end foreign key table transaksi

             $table->string('jumlah_galon');

             $table->string('jenis_pembayaran');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_minum');
    }
};
