<?php

namespace App\Http\Controllers\V1;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Validator;

class ServicesAvailableHospitalsController extends Controller
{

    function get($id = null)
    {
        $query = Hospital::query();
        if (isset($id)) {
            $query->with('services');
            $servicesAvailableHospitals = $query->find($id);

            if (!$servicesAvailableHospitals) {
                return response()->json(['hospital' => 'Nenhum item encontrado']);
            }
            return response()->json($servicesAvailableHospitals);
        }
        $servicesAvailableHospitals = $query->orderBy('hospital', 'asc')->get();
        return response()->json(['hospital' => $servicesAvailableHospitals]);
    }

    function create(Request $request)
    {
        $menssagem = null;
        $notDelete = [];
        if (isset($request->id)) {
            $menssagem = "Hospital atualizado com sucesso";
            $servicesAvailableHospitals = Hospital::find($request->id);
        } else {
            $menssagem = "Hospital criado com sucesso";
            $servicesAvailableHospitals = new Hospital();
        }
        $validator = Validator::make($request->all(), $servicesAvailableHospitals->rules($request->id), $this->menssagem());
        if ($validator->fails()) {
            return response()->json(['erro' => $validator->errors()]);
        }
        $servicesAvailableHospitals->fill($request->all());
        $servicesAvailableHospitals->save();

        if (isset($request->services)) {
            foreach ($request->services as $service) {
                $services = Service::firstOrNew(['id' => $service['id']]);
                $services->service = $service['service'];
                $services->status = $service['status'];
                $services->hospital_id = $servicesAvailableHospitals->id;
                $services->save();
                $notDelete[] = $services->id;
            }
            Service::where('hospital_id', $servicesAvailableHospitals->id)->whereNotIn('id', $notDelete)->get()->each(function($obj) {
                $obj->delete();
            });
        }
        return response()->json($menssagem);
    }

    function destroy(Request $request)
    {
        $ids = $request->ids;
        if (empty($ids)) {
            return response()->json(['Hospital' => 'Nenhum item selecionado']);
        }
        Service::whereIn('hospital_id', $ids)->get()->each(function($ob) {
            $ob->delete();
        });
        Hospital::whereIn('id', $ids)->get()->each(function($ob) {
            $ob->delete();
        });
        return response()->json(['Hospital' => 'Hospital removido com sucesso']);
    }

    public function menssagem()
    {
        $mansage = [
            'hospital.required' => "Hospital é obrigatório",
            'hospital.unique' => "Hospital já existe",
        ];
        return $mansage;
    }

}
