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
            $table->string('train_company', 50)->nullable();
            $table->string('departure_station', 50);
            $table->string('arrived_station', 50);
            $table->timestamp('departure')->nullable();;
            $table->timestamp('arrivals')->nullable();;
            $table->tinyInteger('n_carriages');
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
