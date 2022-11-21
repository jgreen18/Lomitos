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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->String('nombre', 45);
            $table->float('edad');
            $table->String('raza', 45);
            $table->String('sexo', 45);
            $table->Float('peso');
            $table->timestamp('fecha_registro')->current;
            
            $table->unsignedBigInteger("user_id");

            $table->foreign("user_id")
            ->references("id")
            ->on("users")
            ->onDelete("cascade")
            ->onUpdate("cascade");


            $table->unsignedBigInteger("prueba_id")->nullable();

            $table->foreign("prueba_id")
            ->references('id')
            ->on('pruebas')
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
        Schema::dropIfExists('mascotas');
    }
};
