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
        Schema::create('poste', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Description');
            $table->string('photo');
            $table->string('type');
            $table->string('name');
            $table->string('prix');
            $table->timestamps();
            // $table->unsignedInteger('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur');

            $table->foreignId('id_utilisateur')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poste');
    }
};
