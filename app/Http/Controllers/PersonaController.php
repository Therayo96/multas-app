<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        return Persona::all();
    }

    public function show($id)
    {
        return Persona::find($id);
    }

    public function store(Request $request)
    {
        return Persona::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->all());

        return $persona;
    }

    public function delete(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return 204;
    }
}
