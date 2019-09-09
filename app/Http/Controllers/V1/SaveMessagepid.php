<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\V1;

/**
 * Description of SaveMessagepid
 *
 * @author carlosfernandes
 */
use App\Models\Pid;
use App\Http\Controllers\Controller;

class SaveMessagepid extends Controller
{

    static function saveMessagepid($messge)
    {
        $pid = \collect($messge->getSegmentsByName('PID'))->first();
        $pidResponse = new Pid();

        if (!$pid->getField(3) || !$pid->getField(5)) {
            throw new Exception('PID.2 - Patient ID, '
            . 'PID.5 - Patient Name ');
        }
        $pidResponse->set_id_pid_1 = $pid->getField(1);

        if (is_array($pid->getField(2))) {
            if (!empty($pid->getField(2)[0])) {
                $pidResponse->set_id_pid_1 = $pid->getField(2)[0];
            }if (!empty($pid->getField(2)[1])) {
                $pidResponse->identifier_check_digit_2_2 = $pid->getField(2)[1];
            }if (!empty($pid->getField(2)[2])) {
                $pidResponse->check_digit_scheme_2_3 = $pid->getField(2)[2];
            }
        } else {
            $pidResponse->set_id_pid_1 = $pid->getField(2);
        }
        if (is_array($pid->getField(3))) {
            if (!empty($pid->getField(3)[0])) {
                $pidResponse->id_number_3_1 = $pid->getField(3)[0];
            }if (!empty($pid->getField(3)[1])) {
                $pidResponse->identifier_check_digit_3_2 = $pid->getField(3)[1];
            }if (!empty($pid->getField(3)[2])) {
                $pidResponse->check_digit_scheme_3_3 = $pid->getField(3)[2];
            }if (!empty($pid->getField(3)[3])) {
                $pidResponse->assigning_authority_3_4 = $pid->getField(3)[3];
            }
            if (!empty($pid->getField(3)[4])) {
                $pidResponse->assigning_authority_3_5 = $pid->getField(3)[4];
            }
            if (!empty($pid->getField(3)[5])) {
                $pidResponse->assigning_authority_3_6 = $pid->getField(3)[5];
            }
        } else {
            $pidResponse->set_id_pid_1 = $pid->getField(3);
        }

        if (is_array($pid->getField(4))) {
            if (!empty($pid->getField(4)[0])) {
                $pidResponse->id_number_4_1 = $pid->getField(4)[0];
            }if (!empty($pid->getField(4)[1])) {
                $pidResponse->identifier_check_digit_4_2 = $pid->getField(4)[1];
            }if (!empty($pid->getField(4)[2])) {
                $pidResponse->check_digit_scheme_4_3 = $pid->getField(4)[2];
            }if (!empty($pid->getField(4)[3])) {
                $pidResponse->assigning_authority_4_4 = $pid->getField(4)[3];
            }
        } else {
            $pidResponse->id_number_4_1 = $pid->getField(4);
        }

        if (is_array($pid->getField(5))) {
            if (!empty($pid->getField(5)[0])) {
                $pidResponse->family_name_5_1 = $pid->getField(5)[0];
            }if (!empty($pid->getField(5)[1])) {
                $pidResponse->given_name_5_2 = $pid->getField(5)[1];
            }if (!empty($pid->getField(5)[2])) {
                $pidResponse->second_and_further_given_names_or_initials_thereof_5_3 = $pid->getField(5)[2];
            }if (!empty($pid->getField(5)[3])) {
                $pidResponse->suffix_5_4 = $pid->getField(5)[3];
            }
        } else {
            $pidResponse->family_name_5_1 = $pid->getField(5);
        }
        if (is_array($pid->getField(6))) {
            if (!empty($pid->getField(6)[0])) {
                $pidResponse->family_name_6_1 = $pid->getField(6)[0];
            }if (!empty($pid->getField(6)[1])) {
                $pidResponse->given_name_6_2 = $pid->getField(6)[1];
            }if (!empty($pid->getField(6)[2])) {
                $pidResponse->second_and_further_given_names_or_initials_thereof_6_3 = $pid->getField(6)[2];
            }if (!empty($pid->getField(6)[3])) {
                $pidResponse->suffix_6_4 = $pid->getField(6)[3];
            }
        } else {
            $pidResponse->family_name_6_1 = $pid->getField(6);
        }
        $pidResponse->date_time_of_birth_7 = $pid->getField(7);
        $pidResponse->administrative_sex_8 = $pid->getField(8);

        if (is_array($pid->getField(9))) {
            if (!empty($pid->getField(9)[0])) {
                $pidResponse->family_name_9_1 = $pid->getField(9)[0];
            }if (!empty($pid->getField(9)[1])) {
                $pidResponse->given_name_9_2 = $pid->getField(9)[1];
            }if (!empty($pid->getField(9)[2])) {
                $pidResponse->second_and_further_given_names_or_initials_thereof_9_3 = $pid->getField(9)[2];
            }if (!empty($pid->getField(9)[3])) {
                $pidResponse->suffix_9_4 = $pid->getField(9)[3];
            }
        } else {
            $pidResponse->family_name_9_1 = $pid->getField(9);
        }

        if (is_array($pid->getField(10))) {
            if (!empty($pid->getField(10)[0])) {
                $pidResponse->identifier_10_1 = $pid->getField(10)[0];
            }if (!empty($pid->getField(10)[1])) {
                $pidResponse->text_10_2 = $pid->getField(10)[1];
            }
        } else {
            $pidResponse->identifier_10_1 = $pid->getField(10);
        }
        if (is_array($pid->getField(11))) {
            if (!empty($pid->getField(11)[0])) {
                $pidResponse->street_address_11_1 = $pid->getField(11)[0];
            }if (!empty($pid->getField(11)[1])) {
                $pidResponse->other_designation_11_2 = $pid->getField(11)[1];
            }if (!empty($pid->getField(11)[2])) {
                $pidResponse->city_11_3 = $pid->getField(11)[2];
            }if (!empty($pid->getField(11)[3])) {
                $pidResponse->state_or_province_11_4 = $pid->getField(11)[3];
            }if (!empty($pid->getField(11)[4])) {
                $pidResponse->zip_or_postal_code_11_5 = $pid->getField(11)[4];
            }if (!empty($pid->getField(11)[5])) {
                $pidResponse->country_11_6 = $pid->getField(11)[5];
            }if (!empty($pid->getField(11)[6])) {
                $pidResponse->address_type_11_7 = $pid->getField(11)[6];
            }
        } else {
            $pidResponse->street_address_11_1 = $pid->getField(11);
        }
        $pidResponse->county_code_12 = $pid->getField(12);

        if (is_array($pid->getField(13))) {
            if (!empty($pid->getField(13)[0])) {
                $pidResponse->telephone_number_13_1 = $pid->getField(13)[0];
            }if (!empty($pid->getField(13)[1])) {
                $pidResponse->telecommunication_use_code_13_2 = $pid->getField(13)[1];
            }if (!empty($pid->getField(13)[2])) {
                $pidResponse->telecommunication_equipment_type_13_3 = $pid->getField(13)[2];
            }if (!empty($pid->getField(13)[3])) {
                $pidResponse->communication_address_13_4 = $pid->getField(13)[3];
            }if (!empty($pid->getField(13)[4])) {
                $pidResponse->country_code_13_5 = $pid->getField(13)[4];
            }if (!empty($pid->getField(13)[5])) {
                $pidResponse->area_city_code_13_6 = $pid->getField(13)[5];
            }
        } else {
            $pidResponse->telephone_number_13_1 = $pid->getField(13);
        }

        if (is_array($pid->getField(14))) {
            if (!empty($pid->getField(14)[0])) {
                $pidResponse->telephone_number_14_1 = $pid->getField(14)[0];
            }if (!empty($pid->getField(14)[1])) {
                $pidResponse->telecommunication_use_code_14_2 = $pid->getField(14)[1];
            }if (!empty($pid->getField(14)[2])) {
                $pidResponse->telecommunication_equipment_type_14_3 = $pid->getField(14)[2];
            }if (!empty($pid->getField(14)[3])) {
                $pidResponse->communication_address_14_4 = $pid->getField(14)[3];
            }if (!empty($pid->getField(14)[4])) {
                $pidResponse->country_code_14_5 = $pid->getField(14)[4];
            }if (!empty($pid->getField(14)[5])) {
                $pidResponse->area_city_code_14_6 = $pid->getField(14)[5];
            }
        } else {
            $pidResponse->telephone_number_14_1 = $pid->getField(14);
        }
        if (is_array($pid->getField(15))) {
            if (!empty($pid->getField(15)[0])) {
                $pidResponse->identificador_15_1 = $pid->getField(15)[0];
            }if (!empty($pid->getField(15)[1])) {
                $pidResponse->texto_15_2 = $pid->getField(15)[1];
            }
        } else {
            $pidResponse->identificador_15_1 = $pid->getField(15);
        }
        $pidResponse->marital_status_16 = $pid->getField(16);
        $pidResponse->religion_17 = $pid->getField(17);

        if (is_array($pid->getField(18))) {
            if (!empty($pid->getField(18)[0])) {
                $pidResponse->id_number_18_1 = $pid->getField(18)[0];
            }if (!empty($pid->getField(18)[1])) {
                $pidResponse->check_digit_18_2 = $pid->getField(18)[1];
            }if (!empty($pid->getField(18)[2])) {
                $pidResponse->check_digit_scheme_18_3 = $pid->getField(18)[2];
            }
        } else {
            $pidResponse->id_number_18_1 = $pid->getField(18);
        }
        $pidResponse->save();

        return $pidResponse;
    }

}
