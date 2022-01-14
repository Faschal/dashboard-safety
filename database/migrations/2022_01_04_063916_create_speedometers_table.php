<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeedometersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speedometers', function (Blueprint $table) {
            $table->id();
            $table->decimal('baku_mutu',8,2)->nullable();
            $table->decimal('emisi_sumber',8,2)->nullable();
            $table->decimal('udara_ambient',8,2)->nullable();
            $table->integer('no_incident')->nullable();
            $table->char('impact',5)->nullable();
            $table->integer('unique_id')->nullable();
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
        Schema::dropIfExists('speedometers');
    }
}
