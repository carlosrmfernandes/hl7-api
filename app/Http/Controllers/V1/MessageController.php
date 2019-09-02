<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pid;

class MessageController extends Controller
{

    protected $mesege = "MSH|^~\&|ADT1|GOOD HEALTH HOSPITAL|GHH LAB, INC.|GOOD HEALTH HOSPITAL|198808181126|SECURITY|ADT^A01^ADT_A01|MSG00001|T|2.6
EVN||200609282108||02|Interface^HL7 Interface|200609282108
PID|||56782445^^^UAReg^PI||KLEINSAMPLE^BARRY^Q^JR||19620910|M||2028-9^^HL70005^RA99113^^XYZ|260 GOODWIN CREST DRIVE^^BIRMINGHAM^AL^35209^^M~NICKELL’S PICKLES^10000 W 100TH AVE^BIRMINGHAM^AL^35200^^O|||||||0105I30001^^^99DEF^AN
NTE|1|L|NOTE: Submission of serum";

    //PV1|1|I|2000^2012^01||||004777^ATTEND^AARON^A|||SUR||||7|A0|
    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $message = SaveMessage::saveMessage($this->mesege);

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
                ->with('nte');
        $msg = $query->orderBy('id', 'desc')->where('id_number_2_1', $code)->first();

        if ($msg) {
            return response()->json($msg);
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
