<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\V1;

use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segment;

class CreateMessage
{

    public static function createMessage($message)
    {

        $msg = new Message("MSH|^~\&|MegaReg|XYZHospC|SuperOE|XYZImgCtr|20060529090131-0500||ADT^A01^ADT_A01|01052901|P|2.5");
        $evn = new Segment('EVN');
//        dd($message);
        $evn->setField(1, $message->evn->event_type_code_1);
        $evn->setField(2, $message->evn->recorded_date_time_2);
        $evn->setField(3, $message->evn->date_time_planned_event_3);
        $evn->setField(4, $message->evn->event_reason_code_4);
        $evn->setField(5, [$message->evn->id_number_5_1, $message->evn->family_name_5_2, $message->evn->give_name_5_3, $message->evn->second_and_further_given_names_or_initials_thereof_5_4, $message->evn->Suffix_5_5]);
        $evn->setField(6, $message->evn->event_occurred_6);
        $evn->setField(7, [$message->evn->namespace_id_7_1, $message->evn->universal_id_7_2]);

        $pid = new Segment('PID');
        $pid->setField(1, $message->set_id_pid_1);
        $pid->setField(2, [$message->id_number_2_1, $message->identifier_check_digit_2_2, $message->check_digit_scheme_2_3]);
        $pid->setField(3, [$message->id_number_3_1, $message->identifier_check_digit_3_2, $message->check_digit_scheme_3_3, $message->assigning_authority_3_4, $message->identifier_type_code_3_5, $message->assigning_facility_3_6]);
        $pid->setField(4, [$message->id_number_4_1, $message->identifier_check_digit_4_2, $message->check_digit_scheme_4_3, $message->assigning_authority_4_4]);
        $pid->setField(5, [$message->family_name_5_1, $message->given_name_5_2, $message->second_and_further_given_names_or_initials_thereof_5_3, $message->suffix_5_4]);
        $pid->setField(6, [$message->family_name_6_1, $message->given_name_6_2, $message->second_and_further_given_names_or_initials_thereof_6_3, $message->suffix_6_4]);
        $pid->setField(7, $message->date_time_of_birth_7);
        $pid->setField(8, $message->administrative_sex_8);
        $pid->setField(9, [$message->family_name_9_1, $message->given_name_9_2, $message->second_and_further_given_names_or_initials_thereof_9_3, $message->suffix_9_4]);
        $pid->setField(10, [$message->identifier_10_1, $message->text_10_2]);
        $pid->setField(11, [$message->street_address_11_1, $message->other_designation_11_2, $message->city_11_3, $message->state_or_province_11_4, $message->zip_or_postal_code_11_5, $message->country_11_6, $message->address_type_11_7]);
        $pid->setField(12, $message->county_code_12);
        $pid->setField(13, [$message->telephone_number_13_1, $message->telecommunication_use_code_13_2, $message->telecommunication_equipment_type_13_3, $message->communication_address_13_4, $message->country_code_13_5, $message->area_city_code_13_6]);
        $pid->setField(14, [$message->telephone_number_14_1, $message->telecommunication_use_code_14_2, $message->telecommunication_equipment_type_14_3, $message->communication_address_14_4, $message->country_code_14_5, $message->area_city_code_14_6]);
        $pid->setField(15, [$message->identificador_15_1, $message->texto_15_2]);
        $pid->setField(16, $message->marital_status_16);
        $pid->setField(17, $message->religion_17);
        $pid->setField(18, [$message->id_number_18_1, $message->check_digit_18_2, $message->check_digit_scheme_18_3]);

        $nte = new Segment('NTE');
        $nte->setField(1, $message->nte->set_id_nte_1);
        $nte->setField(2, $message->nte->source_of_comment_2);
        $nte->setField(3, $message->nte->comment_3);
        $nte->setField(4, [$message->nte->identifier_4_1, $message->nte->text_4_2, $message->nte->name_of_coding_system_4_3]);

        $obr = new Segment('OBR');
        $obr->setField(1, $message->obr->set_id_obr_1);
        $obr->setField(2, [$message->obr->entity_identifier_2_1, $message->obr->namespace_id_2_2, $message->obr->universal_id_2_3]);
        $obr->setField(3, [$message->obr->entity_identifier_3_1, $message->obr->namespace_id_3_2, $message->obr->universal_id_3_3, $message->obr->universal_id_type_3_4]);
        $obr->setField(4, [$message->obr->identifier_4_1, $message->obr->text_4_2, $message->obr->name_coding_system_4_3, $message->obr->alternate_identifier_4_4]);
        $obr->setField(5, $message->obr->priority_5);
        $obr->setField(6, $message->obr->requested_date_time_6);
        $obr->setField(7, $message->obr->observation_date_time_7);
        $obr->setField(8, $message->obr->observation_end_date_time_8);
        $obr->setField(9, [$message->obr->quantity_9_1, $message->obr->units_9_2]);
        $obr->setField(10, [$message->obr->id_number_10_1, $message->obr->family_name_10_2]);
        $obr->setField(11, $message->obr->specimen_action_code_11);
        $obr->setField(12, [$message->obr->identifier_12_1, $message->obr->text_12_2, $message->obr->name_coding_system_12_3, $message->obr->alternate_identifier_12_4]);
        $obr->setField(13, $message->obr->relevant_clinical_information_13);
        $obr->setField(14, $message->obr->specimen_received_date_time_14);
        $obr->setField(15, [$message->obr->specimen_source_name_or_code_15_1, $message->obr->additives_15_2, $message->obr->specimen_collection_method_15_3]);
        $obr->setField(16, [$message->obr->id_number_16_1, $message->obr->family_name_16_2, $message->obr->given_name_16_3, $message->obr->second_and_further_given_names_or_initials_thereof_16_4, $message->obr->suffix_16_5]);
        $obr->setField(17, $message->obr->order_callback_phone_number_17);


        $msg->addSegment($evn, 1);
        $msg->addSegment($pid, 1);
        $msg->addSegment($nte, 1);
        $msg->addSegment($obr, 1);

        return $msg->toString(true);
    }

}
