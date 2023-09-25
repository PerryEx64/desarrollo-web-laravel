<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use App\Models\Territorio;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DistritoController extends Controller
{
    public function index()
    {
        $distritos = Distrito::all();
        return Inertia::render('Distritos/Distritos', [
            'distritos' => $distritos
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:50'],
            'lider' => ['required', 'max:50'],
            'cantidad_iglesias' => ['required', 'max:2'],
        ]);

        $distritos = new Distrito($request ->input());
        $distritos->save();
        return redirect('distritos');
    }

    public function getDistritos($id){
        $distritos = Distrito::find($id);
        return $distritos;
    }

    public function editDistrito($id, Request $request){
        $distrito = $this->getDistritos($id);
        $distrito->fill($request->all())->save();
        return $distrito;
    }

    public function deleteDistrito($id){
        $distrito= $this->getDistritos($id);
        $distrito->delete();
        return $distrito;
    }
}
