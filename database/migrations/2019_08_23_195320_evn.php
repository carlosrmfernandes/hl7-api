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
            $table->string('event_type_code_1');
            $table->dateTime('recorded_date_time_2');
            $table->dateTime('date_time_planned_event_3')->nullable();
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
