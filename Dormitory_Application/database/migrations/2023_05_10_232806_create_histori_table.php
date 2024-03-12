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
        Schema::create('histori', function (Blueprint $table) {


            $table->id();

           //foreign key table user
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
           //end foreign key table user

             //foreign key table perizinan
                $table->unsignedBigInteger('id_perizinan');
                $table->foreign('id_perizinan')->references('id')->on('perizinan');
             //end foreign key table laundry

             //foreign key table laundry
                $table->unsignedBigInteger('id_laundry');
                $table->foreign('id_laundry')->references('id')->on('laundry');
             //end foreign key table laundry

             //foreign key table listrik
                $table->unsignedBigInteger('id_listrik');
                $table->foreign('id_listrik')->references('id')->on('listrik');
            //end foreign key table listrik

            //foreign key table air_minum
                $table->unsignedBigInteger('id_air_minum');
                $table->foreign('id_air_minum')->references('id')->on('air_minum');
            //end foreign key table air_minum

            //foreign key table paket
                $table->unsignedBigInteger('id_paket');
                $table->foreign('id_paket')->references('id')->on('paket');
           //end foreign key table user
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histori');
    }
};
