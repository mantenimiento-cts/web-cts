<?php

namespace App\Http\Controllers\Soporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipment;
class EquipmentsController extends Controller
{
    public function index(){
        $equipos = Equipment::all();
        return view('soporte.equipments.index', compact('equipos'));
    }
    public function store(Request $request){
        $equipo = Equipment::create($request->all());
        return redirect()->route('equipos.index')->with('success', 'se ha creado un requerimento');
    }
    public function create(){
        return view('soporte.equipments.create');
    }
    public function edit($id){
        $equipo = Equipment::find($id);
        return view('soporte.equipments.edit', compact('equipo'));
    }
    public function update(Request $request, $id){
        $equipo = Equipment::find($id)->update($request->all());
        return redirect()->route('equipos.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $equipo = Equipment::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $equipo = Equipment::find($id);
        return view('soporte.equipments.show', compact('equipo'));
    }
}
