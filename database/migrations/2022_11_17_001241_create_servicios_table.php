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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();

           $table->string('nombre');
           $table->text('descripcion');
           $table->float('precio');

           $table->unsignedBigInteger('categoria_id');
           $table->foreign("categoria_id")
           ->references('id')
           ->on('categorias')
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
        Schema::dropIfExists('servicios');
    }
};
