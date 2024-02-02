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
        Schema::create('notifyavisos', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("Address");
            $table->string("participants");
            $table->string("warningTime");
            $table->string("description");
            $table->string("startDate");
            $table->string("endDate");
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
        Schema::dropIfExists('notifyavisos');
    }
};
