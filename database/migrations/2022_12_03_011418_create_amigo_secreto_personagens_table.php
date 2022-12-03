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
        Schema::create('amigo_secreto_personagens', function (Blueprint $table) {
            $table->id();

            $table->string("rtk",1000);
            $table->boolean("atribuido")->default(false);

            $table->unsignedBigInteger('amigosecreto_id');
            $table->foreign('amigosecreto_id')->references('id')->on('amigo_secretos');

            $table->unsignedBigInteger('personagem_id');
            $table->foreign('personagem_id')->references('id')->on('personagems');
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
        Schema::dropIfExists('amigo_secreto_personagens');
    }
};
