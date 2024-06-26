<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /*

    -Definizione tipo di dato:
    Azienda (company - varchar 60)
    Stazione di partenza (departure_station - varchar 80)
    Stazione di arrivo  (arrival_station - varchar 80)
    Orario di partenza (departure_time TIME)
    Orario di arrivo    (arrival_time TIME)
    Codice Treno (IL CODICE DI IDENTIFICAZIONE DEI TRENI, INTERNAZIONALE È IL NEV ED È DI 12 CIFRE - train_code BIGINT)
    Numero Carrozze (carriages_number TINYINT)
    In orario (on_time TINYINT)
    Cancellato (cancelled TINYINT)

    */

    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 60);
            $table->string('departure_station', 80);
            $table->string('arrival_station', 80);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->bigInteger('train_code');
            $table->tinyInteger('carriages_number');
            $table->boolean('on_time')->default(true);;
            $table->boolean('cancelled')->default(false);;
            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
