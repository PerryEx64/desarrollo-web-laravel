<?php

namespace App\Http\Controllers;

use App\Models\Territorio;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Psy\Readline\Hoa\Console;

class TerritorioController extends Controller
{
    public function index()
    {
        $territorios = Territorio::all();

        return Inertia::render('Territorio/VerTerritorios', [
            'territorios' => $territorios
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:50'],
            'lider' => ['required', 'max:50'],
        ]);

        $territorio = new Territorio($request ->input());
        $territorio->save();
        return redirect('territorios');

    }
}
