<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Evn;
use DateTime;
use Exception;

class SaveMessageevn extends Controller
{

    static function saveMessageEvn($messge, $pid_id)
    {


        $evn = \collect($messge->getSegmentsByName('EVN'))->first();
        $evnResponse = new EVN();

        if ($evn) {

            $evnResponse->event_type_code_1 = $evn->getField(1);

            if (!$evn->getField(2)) {
                throw new Exception('EVN.2 - Recorded Date/Time Required');
            }
            $recordedDateTime_2 = new DateTime($evn->getField(2));
            $evnResponse->recorded_date_time_2 = $recordedDateTime_2;

            if ($evn->getField(3)) {
                $dateTimePlannedEvent_3 = new DateTime($evn->getField(3));
                $evnResponse->date_time_planned_event_3 = $dateTimePlannedEvent_3;
            }
            $evnResponse->event_reason_code_4 = $evn->getField(4);

            if (is_array($evn->getField(5))) {
                if (!empty($evn->getField(5)[0])) {
                    $evnResponse->id_number_5_1 = $evn->getField(5)[0];
                }if (!empty($evn->getField(5)[1])) {
                    $evnResponse->family_name_5_2 = $evn->getField(5)[1];
                }if (!empty($evn->getField(5)[2])) {
                    $evnResponse->give_name_5_3 = $evn->getField(5)[2];
                }
                if (!empty($evn->getField(5)[3])) {
                    $evnResponse->second_and_further_given_names_or_initials_thereof_5_4 = $evn->getField(5)[3];
                }
                if (!empty($evn->getField(5)[4])) {
                    $evnResponse->Suffix_5_5 = $evn->getField(5)[4];
                }
            } else {
                $evnResponse->id_number_5_1 = $evn->getField(5);
            }

            if ($evn->getField(6)) {
                $eventOccurred_7 = new DateTime($evn->getField(6));
                $evnResponse->event_occurred_6 = $eventOccurred_7;
            }

            if (is_array($evn->getField(7))) {
                if (!empty($evn->getField(7)[0])) {
                    $evnResponse->namespace_id_7_1 = $evn->getField(7)[0];
                }if (!empty($evn->getField(7)[1])) {
                    $evnResponse->universal_id_7_2 = $evn->getField(7)[1];
                }
            } else {
                $evnResponse->namespace_id_7_1 = $evn->getField(7);
            }
            $evnResponse->pid_id = $pid_id;
            $evnResponse->save();
        }


        return $evnResponse;
    }

}
