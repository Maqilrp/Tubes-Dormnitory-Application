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
        Schema::create('perizinan', function (Blueprint $table) {
            $table->id();

            //foreign key table user
            // $table->unsignedBigInteger('id_user');
            // $table->foreign('id_user')->references('id')->on('user');
            //end foreign key table user

            //foreign key table users
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            //end foreign key table users

            //foreign key table gedung
            $table->unsignedBigInteger('id_gedung');
            $table->foreign('id_gedung')->references('id')->on('gedung');
            //end foreign key table gedung

            $table->string('jenis_perizinan');

            $table->datetime('tanggal_waktu');

            $table->text('alasan');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinan');
    }
};
