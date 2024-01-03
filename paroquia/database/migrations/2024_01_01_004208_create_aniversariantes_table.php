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
        Schema::create('aniversariantes', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('surname',100);
            $table->date('date_birth');
            $table->char('gender',1);
            $table->string('image')->nullable();
            $table->enum('status', ['submited', 'publicado', 'canceled'])->default('submited');
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
        Schema::dropIfExists('aniversariantes');
    }
};
