<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        return Vehiculo::all();

    }

    public function show($id)
    {
        return Vehiculo::find($id);
    }

    public function store(Request $request)
    {
        return Vehiculo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $persona = Vehiculo::findOrFail($id);
        $persona->update($request->all());

        return $persona;
    }

    public function delete(Request $request, $id)
    {
        $persona = Vehiculo::findOrFail($id);
        $persona->delete();

        return 204;
    }
}
