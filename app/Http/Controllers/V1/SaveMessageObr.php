<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use DateTime;
use Exception;
use App\Models\Obr;

class SaveMessageObr extends Controller
{

    static function saveMessageObr($messge, $pid_id)
    {
        $obr = \collect($messge->getSegmentsByName('OBR'))->first();

        $obrResponse = new Obr();

//        dd($obr->getField(14));

        if ($obr) {
            $obrResponse->set_id_obr_1 = $obr->getField(1);

            if (is_array($obr->getField(2))) {
                if (!empty($obr->getField(2)[0])) {
                    $obrResponse->entity_identifier_2_1 = $obr->getField(2)[0];
                }if (!empty($obr->getField(2)[1])) {
                    $obrResponse->namespace_id_2_2 = $obr->getField(2)[1];
                }if (!empty($obr->getField(2)[2])) {
                    $obrResponse->universal_id_2_3 = $obr->getField(2)[2];
                }
            } else {
                $obrResponse->entity_identifier_2_1 = $obr->getField(2);
            }
            if (is_array($obr->getField(3))) {
                if (!empty($obr->getField(3)[0])) {
                    $obrResponse->entity_identifier_3_1 = $obr->getField(3)[0];
                }if (!empty($obr->getField(3)[1])) {
                    $obrResponse->namespace_id_3_2 = $obr->getField(3)[1];
                }if (!empty($obr->getField(3)[2])) {
                    $obrResponse->universal_id_3_3 = $obr->getField(3)[2];
                }
                if (!empty($obr->getField(3)[3])) {
                    $obrResponse->universal_id_type_3_4 = $obr->getField(3)[3];
                }
            } else {
                $obrResponse->entity_identifier_3_1 = $obr->getField(3);
            }
            if (is_array($obr->getField(4))) {
                if (!empty($obr->getField(4)[0])) {
                    $obrResponse->identifier_4_1 = $obr->getField(4)[0];
                }if (!empty($obr->getField(4)[1])) {
                    $obrResponse->text_4_2 = $obr->getField(4)[1];
                }if (!empty($obr->getField(4)[2])) {
                    $obrResponse->name_coding_system_4_3 = $obr->getField(4)[2];
                }
                if (!empty($obr->getField(4)[3])) {
                    $obrResponse->alternate_identifier_4_4 = $obr->getField(4)[3];
                }
            } else {
                $obrResponse->entity_identifier_3_1 = $obr->getField(4);
            }
            $obrResponse->priority_5 = $obr->getField(5);
            $obrResponse->requested_date_time_6 = $obr->getField(6);
            $obrResponse->observation_date_time_7 = $obr->getField(7);
            $obrResponse->observation_end_date_time_8 = $obr->getField(8);

            if (is_array($obr->getField(9))) {
                if (!empty($obr->getField(9)[0])) {
                    $obrResponse->quantity_9_1 = $obr->getField(9)[0];
                }if (!empty($obr->getField(9)[1])) {
                    $obrResponse->units_9_2 = $obr->getField(9)[1];
                }
            } else {
                $obrResponse->quantity_9_1 = $obr->getField(9);
            }
            if (is_array($obr->getField(10))) {
                if (!empty($obr->getField(10)[0])) {
                    $obrResponse->id_number_10_1 = $obr->getField(10)[0];
                }if (!empty($obr->getField(10)[1])) {
                    $obrResponse->family_name_10_2 = $obr->getField(10)[1];
                }
            } else {
                $obrResponse->id_number_10_1 = $obr->getField(10);
            }
            $obrResponse->specimen_action_code_11 = $obr->getField(11);

            if (is_array($obr->getField(12))) {
                if (!empty($obr->getField(12)[0])) {
                    $obrResponse->identifier_12_1 = $obr->getField(12)[0];
                }if (!empty($obr->getField(12)[1])) {
                    $obrResponse->text_12_2 = $obr->getField(12)[1];
                }if (!empty($obr->getField(12)[2])) {
                    $obrResponse->name_coding_system_12_3 = $obr->getField(12)[2];
                }
                if (!empty($obr->getField(12)[3])) {
                    $obrResponse->alternate_identifier_12_4 = $obr->getField(12)[3];
                }
            } else {
                $obrResponse->identifier_12_1 = $obr->getField(12);
            }
            $obrResponse->relevant_clinical_information_13 = $obr->getField(13);

            if ($obr->getField(14) != "") {
                $obrResponse->specimen_received_date_time_14 = $obr->getField(14);
            }
            if (is_array($obr->getField(15))) {
                if (!empty($obr->getField(15)[0])) {
                    $obrResponse->specimen_source_name_or_code_15_1 = $obr->getField(15)[0];
                }if (!empty($obr->getField(15)[1])) {
                    $obrResponse->additives_15_2 = $obr->getField(15)[1];
                }if (!empty($obr->getField(15)[2])) {
                    $obrResponse->specimen_collection_method_15_3 = $obr->getField(15)[2];
                }
            } else {
                $obrResponse->specimen_source_name_or_code_15_1 = $obr->getField(15);
            }
            if (is_array($obr->getField(16))) {
                if (!empty($obr->getField(16)[0])) {
                    $obrResponse->id_number_16_1 = $obr->getField(16)[0];
                }if (!empty($obr->getField(16)[1])) {
                    $obrResponse->family_name_16_2 = $obr->getField(16)[1];
                }if (!empty($obr->getField(16)[2])) {
                    $obrResponse->given_name_16_3 = $obr->getField(16)[2];
                }if (!empty($obr->getField(16)[3])) {
                    $obrResponse->second_and_further_given_names_or_initials_thereof_16_4 = $obr->getField(16)[3];
                }if (!empty($obr->getField(16)[4])) {
                    $obrResponse->suffix_16_5 = $obr->getField(16)[4];
                }
            } else {
                $obrResponse->id_number_16_1 = $obr->getField(16);
            }
            $obrResponse->order_callback_phone_number_17 = $obr->getField(17);
            $obrResponse->pid_id = $pid_id;
            $obrResponse->save();

            return $obrResponse;
        }
    }

}
