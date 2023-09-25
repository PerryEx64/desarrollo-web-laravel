<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegionController extends Controller
{
    public function index()
    {
        $regiones = Region::all();
        return Inertia::render('Region/Region', [
            'regiones' => $regiones
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:50'],
            'lider' => ['required', 'max:50'],
        ]);

        $distritos = new Region($request ->input());
        $distritos->save();
        return redirect('regiones');
    }
}
