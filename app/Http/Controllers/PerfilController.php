<?php
namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller{
    public function index()
    {
        $perfiles = Perfil::all();
        return view('perfiles.index', compact('perfiles'));
    }

    public function create()
    {
        return view('perfiles.create');
    }

    public function show(
        Perfil $perfil)
    {
        return view('perfiles.show', compact('perfil'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',

        ]);

        Perfil::create($request->all());

        return redirect()->route('perfiles.index')->with('success', 'Perfil creado correctamente.');
    }

    public function edit(Perfil $perfil)
    {
        return view('perfiles.edit', compact('perfil'));
    }

    public function update(Request $request, Perfil $perfil)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $perfil->update($request->all());

        return redirect()->route('perfiles.index')->with('success', 'Perfil actualizado correctamente.');
    }

    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect()->route('perfiles.index')->with('success', 'Perfil eliminado correctamente.');
    }

}