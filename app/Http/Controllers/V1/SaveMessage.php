<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segment;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\V1\SaveMessagemsh;

class SaveMessage extends Controller
{

    static function saveMessage(string $message)
    {
        $msg = new Message($message);

        DB::beginTransaction();
        try {
            $pidResponse = SaveMessagepid::saveMessagepid($msg);
            $mshResponse = SaveMessagemsh::saveMessageMsh($msg, $pidResponse->id);
            $evnResponse = SaveMessageevn::saveMessageEvn($msg, $pidResponse->id);
            $nteResponse = SaveMessagnte::SaveMessagnte($msg, $pidResponse->id);
            DB::commit();
            return ['msg' => $msg];
        } catch (Exception $ex) {
            DB::rollBack();
            return ['msg_erro' => $ex->getMessage()];
        }









//        $msg = new Message("MSH|^~\&|MegaReg|XYZHospC|SuperOE|XYZImgCtr|20060529090131-0500||ADT^A01^ADT_A01|01052901|P|2.5");
//        $b = null;
//        $abc = new Segment('PID');
//        $abc->setField(1, '1');
//        $abc->setField(2, $b);
//        $abc->setField(3, '454721');
//        $msg->setSegment($abc, 1);       
//        dd($msg->toString(true));
    }

}
