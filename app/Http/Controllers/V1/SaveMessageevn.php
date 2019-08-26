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

    static function saveMessageEvn($messge)
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

            $evnResponse->save();
        }


        return $evnResponse;
    }

}
