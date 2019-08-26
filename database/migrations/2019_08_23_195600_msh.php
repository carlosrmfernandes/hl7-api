<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Msh extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('field_separator_1');
            $table->string('encoding_characters_2');
            $table->string('namespace_id_3_1')->nullable();
            $table->string('universal_id_3_2')->nullable();
            $table->string('universal_id_type_3_3')->nullable();
            $table->string('namespace_id_4_1')->nullable();
            $table->string('universal_id_4_2')->nullable();
            $table->string('universal_id_type_4_3')->nullable();
            $table->string('namespace_id_5_1')->nullable();
            $table->string('universal_id_5_2')->nullable();
            $table->string('universal_id_type_5_3')->nullable();
            $table->string('namespace_id_6_1')->nullable();
            $table->string('universal_id_6_2')->nullable();
            $table->string('universal_id_type_6_3')->nullable();
            $table->dateTime('date_time_of_message_7');
            $table->dateTime('security_8')->nullable();
            $table->string('message_code_9_1');
            $table->string('trigger_event_9_2')->nullable();
            $table->string('message_structure_9_3')->nullable();
            $table->string('message_control_id_10');
            $table->string('processing_id_11_1');
            $table->string('processing_mode_11_2')->nullable();
            $table->string('version_id_12_1');
            $table->string('internationalization_code_12_2')->nullable();
            $table->string('international_version_id_12_3')->nullable();
            $table->integer('sequence_number_13')->nullable();
            $table->string('continuation_pointer_14')->nullable();
            $table->string('accept_acknowledgment_type_15')->nullable();
            $table->string('application_acknowledgment_type_16')->nullable();
            $table->string('country_code_17')->nullable();
            $table->string('character_set_18')->nullable();
            $table->string('identifier_19_1')->nullable();
            $table->string('text_19_2')->nullable();
            $table->string('name_of_coding_system_19_3')->nullable();
            $table->string('alternate_dentifier_19_4')->nullable();
            $table->string('alternate_ext_19_5')->nullable();
            $table->string('name_of_alternate_coding_system_19_6')->nullable();
            $table->string('coding_system_version_id_19_7')->nullable();
            $table->string('alternate_coding_system_version_id_19_8')->nullable();
            $table->string('original_text_19_9')->nullable();
            $table->string('second_alternate_identifier_19_10')->nullable();
            $table->string('second_alternate_text_19_11')->nullable();
            $table->string('name_of_second_alternate_coding_system_19_12')->nullable();
            $table->string('second_alternate_coding_system_version_id_19_13')->nullable();
            $table->string('coding_system_oid_19_14')->nullable();
            $table->string('value_set_oid_19_15')->nullable();
            $table->string('value_set_version_id_19_16')->nullable();
            $table->string('alternate_coding_system_oid_19_17')->nullable();
            $table->string('alternate_alue_set_oid_19_18')->nullable();
            $table->dateTime('vlternate_value_set_version_id_19_19')->nullable();
            $table->string('second_alternate_coding_system_oid_19_20')->nullable();
            $table->string('second_alternate_value_set_oid_19_21')->nullable();
            $table->dateTime('second_alternate_value_set_version_id_19_22')->nullable();
            $table->string('alternate_character_set_handling_scheme_20')->nullable();
            $table->string('entity_identifier_21_1')->nullable();
            $table->string('namespace_id_21_2')->nullable();
            $table->string('universal_id_21_3')->nullable();
            $table->string('universal_id_type_21_4')->nullable();
            $table->string('organization_name_22_1')->nullable();
            $table->string('organization_name_type_code_22_2')->nullable();
            $table->string('id_number_22_3')->nullable();
            $table->string('identifier_check_digit_22_4')->nullable();
            $table->string('check_digit_scheme_22_5')->nullable();
            $table->string('assigning_authority_22_6')->nullable();
            $table->string('identifier_type_code_22_7')->nullable();
            $table->string('assigning_facility_22_8')->nullable();
            $table->string('name_representation_code_22_9')->nullable();
            $table->string('organization_identifier_22_10')->nullable();
            $table->string('organization_name23_1')->nullable();
//            
//            
//            
//            
//            $table->string('23_2_organization_name_type_code')->nullable();
//            $table->string('23_3_id_number')->nullable();
//            $table->string('23_4_identifier_check_digit')->nullable();
//            $table->string('23_5_check_digit_scheme')->nullable();
//            $table->string('23_6_assigning_authority')->nullable();
//            $table->string('23_7_identifier_type_code')->nullable();
//            $table->string('23_8_assigning_facility')->nullable();
//            $table->string('23_9_name_representation_code')->nullable();
//            $table->string('23_10_organization_identifier')->nullable();
//            $table->string('24_1_namespace_id')->nullable();
//            $table->string('24_2_universal_id')->nullable();
//            $table->string('24_3_universal_id_type')->nullable();
//            $table->string('25_1_namespace_id')->nullable();
//            $table->string('25_2_universal_id')->nullable();
//            $table->string('25_3_universal_id_type')->nullable();

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
        Schema::dropIfExists('msh');
    }

}
