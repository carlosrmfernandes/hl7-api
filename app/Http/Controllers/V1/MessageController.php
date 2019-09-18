<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pid;

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
