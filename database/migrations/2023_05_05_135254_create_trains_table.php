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
            $table->id('id_train')->unique();
            $table->string('train_company')->nullable();
            $table->string('departure_station');
            $table->string('arrived_station');
            $table->timestamp('departure')->nullable();;
            $table->timestamp('arrivals')->nullable();;
            $table->string('n_carriages');
            $table->boolean('on_time');
            $table->boolean('is_deleted');
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
