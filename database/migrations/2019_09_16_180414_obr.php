<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Obr extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obr', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('set_id_obr_1')->nullable();
            $table->string('entity_identifier_2_1')->nullable();
            $table->string('namespace_id_2_2')->nullable();
            $table->string('universal_id_2_3')->nullable();
            $table->string('entity_identifier_3_1')->nullable();
            $table->string('namespace_id_3_2')->nullable();
            $table->string('universal_id_3_3')->nullable();
            $table->string('universal_id_type_3_4')->nullable();

            $table->string('identifier_4_1')->nullable();
            $table->string('text_4_2')->nullable();
            $table->string('name_coding_system_4_3')->nullable();
            $table->string('alternate_identifier_4_4')->nullable();

            $table->string('priority_5')->nullable();


            $table->dateTime('requested_date_time_6')->nullable();

            $table->dateTime('observation_date_time_7')->nullable();
            $table->string('observation_end_date_time_8')->nullable();

            $table->string('quantity_9_1')->nullable();
            $table->string('units_9_2')->nullable();

            $table->string('id_number_10_1')->nullable();
            $table->string('family_name_10_2')->nullable();

            $table->string('specimen_action_code_11')->nullable();

            $table->string('identifier_12_1')->nullable();
            $table->string('text_12_2')->nullable();
            $table->string('name_coding_system_12_3')->nullable();
            $table->string('alternate_identifier_12_4')->nullable();

            $table->string('relevant_clinical_information_13')->nullable();
            $table->dateTime('specimen_received_date_time_14')->nullable();

            $table->string('specimen_source_name_or_code_15_1')->nullable();
            $table->string('additives_15_2')->nullable();
            $table->string('specimen_collection_method_15_3')->nullable();

            $table->string('id_number_16_1')->nullable();
            $table->string('family_name_16_2')->nullable();
            $table->string('given_name_16_3')->nullable();
            $table->string('second_and_further_given_names_or_initials_thereof_16_4')->nullable();
            $table->string('suffix_16_5')->nullable();
            $table->string('order_callback_phone_number_17')->nullable();
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
        Schema::dropIfExists('obr');
    }

}
