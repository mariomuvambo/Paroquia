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
        Schema::create('ministerios', function (Blueprint $table) {
            $table->id();
            $table->string('nameMinister');
            $table->string('finalidade');
            $table->string('tarefa_resp_minister');
            $table->string('tarefa_resp_adjunt');
            $table->string('tarefa_sector_geral');
            $table->string('sectores_minister');
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
        Schema::dropIfExists('ministerios');
    }
};
