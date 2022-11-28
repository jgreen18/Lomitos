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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();

            $table->timestamp('fecha_registro')->current;
            $table->date('fecha_cita');
            $table->time('hora_cita');

            $table->unsignedBigInteger('mascota_id');

            $table->foreign("mascota_id")
            ->references('id')
            ->on('Mascotas')
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->unsignedBigInteger('extra_id')->nullable();

            $table->foreign("extra_id")
            ->references('id')
            ->on('Extras')
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->unsignedBigInteger('servicio_id');

            $table->foreign("servicio_id")
            ->references('id')
            ->on('servicios')
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->unsignedBigInteger('cstatus_id')->default('1');

            $table->foreign("cstatus_id")
            ->references('id')
            ->on('cstatuses')
            ->onDelete("cascade")
            ->onUpdate("cascade");


            
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
        Schema::dropIfExists('citas');
    }
};
