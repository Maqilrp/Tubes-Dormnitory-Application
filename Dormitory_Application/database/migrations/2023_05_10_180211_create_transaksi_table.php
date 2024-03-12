<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();

            // timestamp menggunakan carbon library
            $table->dateTime('tanggal_waktu')->default(Carbon::now());
            // timestamp menggunakan carbon library

            //foreign key table laundry
            // $table->unsignedBigInteger('id_laundry');
            // $table->foreign('id_laundry')->references('id')->on('laundry');
            //end foreign key table laundry

            //foreign key table listrik
            // $table->unsignedBigInteger('id_listrik');
            // $table->foreign('id_listrik')->references('id')->on('listrik');
            //end foreign key table listrik

            //foreign key table air_minum
            // $table->unsignedBigInteger('id_air_minum');
            // $table->foreign('id_air_minum')->references('id')->on('air_minum');
            //end foreign key table air_minum

            $table->decimal('total');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
