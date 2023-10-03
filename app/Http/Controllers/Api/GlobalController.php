<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Distrito;
use App\Models\Region;
use App\Models\RegionesDistrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class GlobalController extends Controller
{
    public function regionesDistritos()
    {
            $regionesDistritos = DB::table('regiones_distritos')
                ->join('regiones', 'regiones.id', '=', 'regiones_distritos.id_region')
                ->join('distritos', 'distritos.id', '=', 'regiones_distritos.id_distrito')
                ->select('regiones.nombre as regiones',
                    'regiones.lider as lider_region' ,
                    'distritos.nombre as distritos',
                    'distritos.lider as lider_distrito')
                ->get();
        return response()->json($regionesDistritos);
    }

    public function distritos()
    {
        $distritos = Distrito::all();
        return response()->json($distritos);
    }

    public function saveDistritos(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:50'],
            'lider' => ['required', 'max:50'],
            'cantidad_iglesias' => ['required', 'max:2'],
        ]);

        $distritos = new Distrito($request ->input());
        $distritos->save();
        return response()->json($distritos);
    }
}
