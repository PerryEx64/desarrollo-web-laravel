<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use App\Models\Region;
use App\Models\RegionesDistrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class RegionesDistritosController extends Controller
{
    public function index()
    {
        $regionesDistritos = DB::table('regiones_distritos')
            ->join('regiones', 'regiones.id', '=', 'regiones_distritos.id_region')
            ->join('distritos', 'distritos.id', '=', 'regiones_distritos.id_distrito')
            ->select('regiones.nombre as regiones',
                'regiones.lider as lider_region' ,
                'distritos.nombre as distritos',
                'distritos.lider as lider_distrito')
            ->get();

        $regiones = Region::all();
        $distritos = Distrito::all();

        return Inertia::render('RegionesDistritos/RegionesDistritos', [
            'regionesDistritos' => $regionesDistritos,
            'regiones' => $regiones,
            'distritos' => $distritos
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_region' => ['required', 'max:3'],
            'id_distrito' => ['required', 'max:3'],
        ]);

        $regionesDistritos = new RegionesDistrito($request ->input());
        $regionesDistritos->save();
        return redirect('regionesDistritos');
    }
}
