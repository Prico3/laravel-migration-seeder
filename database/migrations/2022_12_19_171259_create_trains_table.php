<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_arrivo');
            $table->string('stazione_partenza');
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->tinyInteger('codice_treno');
            $table->tinyInteger('carrozze');
            $table->string('in_orario');
            $table->string('cancellato');
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
        Schema::dropIfExists('trains');
    }
};
