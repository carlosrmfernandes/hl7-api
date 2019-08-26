<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Msh;
use DateTime;
use Exception;

class SaveMessagemsh extends Controller
{

    static function saveMessageMsh(object $messge)
    {
        $msh = \collect($messge->getSegmentsByName('PID'))->first();
        

        $mshResponse = new Msh();

        if (!$msh->getField(7) || !$msh->getField(2) || !$msh->getField(9) || !$msh->getField(10) || !$msh->getField(11) || !$msh->getField(12)) {
            throw new Exception('MSH.2 - Encoding Characters, '
            . 'MSH.7 - Date/Time Of Message, '
            . 'MSH.9.1 - Message Code, '
            . 'MSH.10 - Message Control Id, '
            . 'MSH.11.1 - Processing Id and'
            . 'MSH.12.1 - Version Id Required');
        }

        $mshResponse->field_separator_1 = $msh->getField(1);
        $mshResponse->encoding_characters_2 = $msh->getField(2);
        if (is_array($msh->getField(3))) {
            if (!empty($msh->getField(3)[0])) {
                $mshResponse->namespace_id_3_1 = $msh->getField(3)[0];
            }if (!empty($msh->getField(3)[1])) {
                $mshResponse->universal_id_3_2 = $msh->getField(3)[1];
            }if (!empty($msh->getField(3)[2])) {
                $mshResponse->universal_id_type_3_3 = $msh->getField(3)[2];
            }
        } else {
            $mshResponse->namespace_id_3_1 = $msh->getField(3);
        }

        if (is_array($msh->getField(4))) {
            if (!empty($msh->getField(4)[0])) {
                $mshResponse->namespace_id_4_1 = $msh->getField(4)[0];
            }if (!empty($msh->getField(4)[1])) {
                $mshResponse->universal_id_4_2 = $msh->getField(4)[1];
            }if (!empty($msh->getField(4)[2])) {
                $mshResponse->universal_id_type_4_3 = $msh->getField(4)[2];
            }
        } else {
            $mshResponse->namespace_id_4_1 = $msh->getField(4);
        }

        if (is_array($msh->getField(5))) {
            if (!empty($msh->getField(5)[0])) {
                $mshResponse->namespace_id_5_1 = $msh->getField(5)[0];
            }if (!empty($msh->getField(5)[1])) {
                $mshResponse->universal_id_5_2 = $msh->getField(5)[1];
            }if (!empty($msh->getField(5)[2])) {
                $mshResponse->universal_id_type_5_3 = $msh->getField(5)[2];
            }
        } else {
            $mshResponse->namespace_id_5_1 = $msh->getField(5);
        }
        if (is_array($msh->getField(6))) {
            if (!empty($msh->getField(6)[0])) {
                $mshResponse->namespace_id_6_1 = $msh->getField(6)[0];
            }if (!empty($msh->getField(6)[1])) {
                $mshResponse->universal_id_6_2 = $msh->getField(6)[1];
            }if (!empty($msh->getField(6)[2])) {
                $mshResponse->universal_id_type_6_3 = $msh->getField(6)[2];
            }
        } else {
            $mshResponse->namespace_id_6_1 = $msh->getField(6);
        }

        if ($msh->getField(7)) {
            $date_time_of_message_7 = new DateTime($msh->getField(7));
            $mshResponse->date_time_of_message_7 = $date_time_of_message_7->format("Y/m/d");
        }

        if ($msh->getField(8)) {
            $security_8 = new DateTime($msh->getField(8));
            $mshResponse->security_8 = $security_8->format("Y/m/d");
        }

        if (is_array($msh->getField(9))) {
            if (!empty($msh->getField(9)[0])) {
                $mshResponse->message_code_9_1 = $msh->getField(9)[0];
            }if (!empty($msh->getField(9)[1])) {
                $mshResponse->trigger_event_9_2 = $msh->getField(9)[1];
            }if (!empty($msh->getField(9)[2])) {
                $mshResponse->message_structure_9_3 = $msh->getField(9)[2];
            }
        } else {
            $mshResponse->message_code_9_1 = $msh->getField(9);
        }

        $mshResponse->message_control_id_10 = $msh->getField(10);

        if (is_array($msh->getField(11))) {
            if (!empty($msh->getField(11)[0])) {
                $mshResponse->processing_id_11_1 = $msh->getField(11)[0];
            }if (!empty($msh->getField(11)[1])) {
                $mshResponse->processing_mode_11_2 = $msh->getField(11)[1];
            }
        } else {
            $mshResponse->processing_id_11_1 = $msh->getField(11);
        }

        if (is_array($msh->getField(12))) {
            if (!empty($msh->getField(12)[0])) {
                $mshResponse->version_id_12_1 = $msh->getField(12)[0];
            }if (!empty($msh->getField(12)[1])) {
                $mshResponse->internationalization_code_12_2 = $msh->getField(12)[1];
            }if (!empty($msh->getField(12)[2])) {
                $mshResponse->international_version_id_12_3 = $msh->getField(12)[2];
            }
        } else {
            $mshResponse->version_id_12_1 = $msh->getField(12);
        }

        $mshResponse->save();

        return $mshResponse;
    }

}
