<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePyramidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pyramids', function (Blueprint $table) {
            $table->id();
            $table->integer('lost_time')->nullable();
            $table->integer('medical_treatment')->nullable();
            $table->integer('work_injury')->nullable();
            $table->integer('nearmiss_potensial')->nullable();
            $table->integer('report_report')->nullable();
            $table->integer('report_nop')->nullable();
            $table->integer('report_lti')->nullable();
            $table->integer('audit_report')->nullable();
            $table->integer('audit_nop')->nullable();
            $table->integer('audit_lti')->nullable();
            $table->integer('unsafe_action')->nullable();
            $table->integer('lingkaran_1_1')->nullable();
            $table->integer('lingkaran_1_2')->nullable();
            $table->integer('unsafe_condition')->nullable();
            $table->integer('lingkaran_2_1')->nullable();
            $table->integer('lingkaran_2_2')->nullable();
            $table->integer('site_man')->nullable();
            $table->integer('zero_lti_man')->nullable();
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
        Schema::dropIfExists('pyramids');
    }
}
