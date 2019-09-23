<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pid;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $message = SaveMessage::saveMessage($request->message);

        if (!empty($message['msg_erro'])) {
            return response()->json(['erro' => $message['msg_erro']]);
        }
        return response()->json($message['msg']->toString(true));
    }

    public function show($code)
    {
        $query = Pid::query();
        $query->with('msh')
                ->with('evn')
                ->with('nte')
                ->with('obr');
        $msg = $query->orderBy('id', 'desc')->where('id_number_3_1', $code)->first();

        if ($msg) {
            $service = Service::query()
                    ->with("hospital")
                    ->where('service', "=", $msg->obr->identifier_4_1)
                    ->where('status', '=', 1);
        }

//        $msg = new Message("MSH|^~\&|MegaReg|XYZHospC|SuperOE|XYZImgCtr|20060529090131-0500||ADT^A01^ADT_A01|01052901|P|2.5");
//        $b = null;
//        $abc = new Segment('PID');
//        $abc->setField(1, '1');
//        $abc->setField(2, $b);
//        $abc->setField(3, '454721');
//        $msg->setSegment($abc, 1);       
//        dd($msg->toString(true));
        if ($msg) {

            return response()->json(["dados_paciente" => $msg, "hospitais" => $service->get()]);
        }
        return response()->json(['msg' => 'Nenhum Paciente Encontrado']);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }

}
