<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\V1;

/**
 * Description of SaveMessagnte
 *
 * @author carlosfernandes
 */
use App\Http\Controllers\Controller;
use App\Models\Nte;

class SaveMessagnte extends Controller
{

    static function SaveMessagnte($messge, $pid_id)
    {
        $nte = \collect($messge->getSegmentsByName('NTE'))->first();

        $nteResponse = new Nte();

        $nteResponse->set_id_nte_1 = $nte->getField(1);
        $nteResponse->source_of_comment_2 = $nte->getField(2);
        $nteResponse->comment_3 = $nte->getField(3);

        if (is_array($nte->getField(4))) {
            if (!empty($nte->getField(4)[0])) {
                $nteResponse->identifier_4_1 = $nte->getField(4)[0];
            }if (!empty($nte->getField(4)[1])) {
                $nteResponse->text_4_2 = $nte->getField(4)[1];
            }if (!empty($nte->getField(4)[2])) {
                $nteResponse->name_of_coding_system_4_3 = $nte->getField(4)[2];
            }
        } else {
            $nteResponse->identifier_4_1 = $nte->getField(4);
        }
        $nteResponse->pid_id = $pid_id;
        return $nteResponse->save();
    }

}
