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
        Schema::create('amigo_secretos', function (Blueprint $table) {
            $table->id();
            $table->date('data');

            $table->unsignedBigInteger('useradmin_id');
            $table->foreign('useradmin_id')->references('id')->on('users');

            $table->boolean('sorteado')->default(false);
            $table->float('valor_minimo')->nullable()->default(0);
            $table->float('valor_maximo')->nullable()->default(0);
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
        Schema::dropIfExists('amigo_secretos');
    }
};
