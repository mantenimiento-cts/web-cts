<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentsController extends Controller
{
    public function index(){
        $equipments = Equipment::all();
        return view('administrador.equipments.index', compact('equipments'));
    }
    public function store(Request $request){
        $equipment = Equipment::create($request->all());
        return redirect()->route('equipments.index')->with('success', 'se ha creado un requerimento');
    }
    public function create(){
        return view('administrador.equipments.create');
    }
    public function edit($id){
        $equipment = Equipment::find($id);
        return view('administrador.equipments.edit', compact('equipment'));
    }
    public function update(Request $request, $id){
        $equipment = Equipment::find($id)->update($request->all());
        return redirect()->route('equipments.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $equipment = Equipment::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $equipment = Equipment::find($id);
        return view('administrador.equipments.show', compact('equipment'));
    }
}
