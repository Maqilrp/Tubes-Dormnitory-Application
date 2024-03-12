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
        Schema::create('pengaduan_paket', function (Blueprint $table) {
            $table->id();


            //foreign key table user
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            //end foreign key table user

            //foreign key table gedung
            $table->unsignedBigInteger('id_gedung');
            $table->foreign('id_gedung')->references('id')->on('gedung');
            //end foreign key table gedung

            $table->text('permasalahan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan_paket');
    }
};
