<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pid extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('set_id_pid_1')->nullable();
            $table->string('id_number_2_1')->nullable();
            $table->string('identifier_check_digit_2_2')->nullable();
            $table->string('check_digit_scheme_2_3')->nullable();
            $table->string('id_number_3_1')->nullable();
            $table->string('identifier_check_digit_3_2')->nullable();
            $table->string('check_digit_scheme_3_3')->nullable();
            $table->string('assigning_authority_3_4')->nullable();
            $table->string('identifier_type_code_3_5')->nullable();
            $table->string('assigning_facility_3_6')->nullable();
            $table->string('id_number_4_1')->nullable();
            $table->string('identifier_check_digit_4_2')->nullable();
            $table->string('check_digit_scheme_4_3')->nullable();
            $table->string('assigning_authority_4_4')->nullable();

            $table->string('family_name_5_1')->nullable();
            $table->string('given_name_5_2')->nullable();
            $table->string('second_and_further_given_names_or_initials_thereof_5_3')->nullable();
            $table->string('suffix_5_4')->nullable();

            $table->string('family_name_6_1')->nullable();
            $table->string('given_name_6_2')->nullable();
            $table->string('second_and_further_given_names_or_initials_thereof_6_3')->nullable();
            $table->string('suffix_6_4')->nullable();
            $table->dateTime('date_time_of_birth_7')->nullable();
            $table->string('administrative_sex_8')->nullable();

            $table->string('family_name_9_1')->nullable();
            $table->string('given_name_9_2')->nullable();
            $table->string('second_and_further_given_names_or_initials_thereof_9_3')->nullable();
            $table->string('suffix_9_4')->nullable();
            $table->string('identifier_10_1')->nullable();
            $table->string('text_10_2')->nullable();

            $table->string('street_address_11_1')->nullable();
            $table->string('other_designation_11_2')->nullable();
            $table->string('city_11_3')->nullable();
            $table->string('state_or_province_11_4')->nullable();
            $table->string('zip_or_postal_code_11_5')->nullable();
            $table->string('country_11_6')->nullable();
            $table->string('address_type_11_7')->nullable();

            $table->string('county_code_12')->nullable();

            $table->string('telephone_number_13_1')->nullable();
            $table->string('telecommunication_use_code_13_2')->nullable();
            $table->string('telecommunication_equipment_type_13_3')->nullable();
            $table->string('communication_address_13_4')->nullable();
            $table->string('country_code_13_5')->nullable();
            $table->string('area_city_code_13_6')->nullable();

            $table->string('telephone_number_14_1')->nullable();
            $table->string('telecommunication_use_code_14_2')->nullable();
            $table->string('telecommunication_equipment_type_14_3')->nullable();
            $table->string('communication_address_14_4')->nullable();
            $table->string('country_code_14_5')->nullable();
            $table->string('area_city_code_14_6')->nullable();

            $table->string('identificador_15_1')->nullable();
            $table->string('texto_15_2')->nullable();
            $table->string('marital_status_16')->nullable();
            $table->string('religion_17')->nullable();

            $table->string('id_number_18_1')->nullable();
            $table->string('check_digit_18_2')->nullable();
            $table->string('check_digit_scheme_18_3')->nullable();


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
        Schema::dropIfExists('pid');
    }

}
