<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evn extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_type_code_1')->nullable();
            $table->dateTime('recorded_date_time_2');
            $table->dateTime('date_time_planned_event_3')->nullable();
            $table->string('event_reason_code_4')->nullable();
            $table->string('id_number_5_1')->nullable();
            $table->string('family_name_5_2')->nullable();
            $table->string('give_name_5_3')->nullable();
            $table->string('second_and_further_given_names_or_initials_thereof_5_4')->nullable();
            $table->string('Suffix_5_5')->nullable();
            $table->dateTime('event_occurred_6')->nullable();
            $table->string('namespace_id_7_1')->nullable();
            $table->string('universal_id_7_2')->nullable();
            $table->unsignedBigInteger('pid_id');
            $table->foreign('pid_id')->references('id')->on('pid');
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
        Schema::dropIfExists('evn');
    }

}
