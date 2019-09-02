<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nte extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nte', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('set_id_nte_1')->nullable();
            $table->string('source_of_comment_2')->nullable();
            $table->string('comment_3')->nullable();

            $table->string('identifier_4_1')->nullable();
            $table->string('text_4_2')->nullable();
            $table->string('name_of_coding_system_4_3')->nullable();
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
        Schema::dropIfExists('nte');
    }

}
