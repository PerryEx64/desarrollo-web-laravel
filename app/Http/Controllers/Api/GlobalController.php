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
                ->join('regiones', 'regiones.id_region', '=', 'regiones_distritos.id_region')
                ->join('distritos', 'distritos.id_distrito', '=', 'regiones_distritos.id_distrito')
                ->select('regiones.nombre as regiones',
                    'regiones.lider as lider_region' ,
                    'distritos.nombre as distritos',
                    'distritos.lider as lider_distrito')
                ->get();
        return response()->json($regionesDistritos);
    }
}
