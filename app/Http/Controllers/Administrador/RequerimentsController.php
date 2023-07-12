<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requeriment;

class RequerimentsController extends Controller
{
    public function index(){
        $requeriments = Requeriment::all();
        return view('administrador.requeriments.index', compact('requeriments'));
    }
    public function store(Request $request){
        $requeriment = Requeriment::create($request->all());
        return redirect()->route('requeriments.index')->with('success', 'se ha creado un requerimento');
    }
    public function create(){
        return view('administrador.requeriments.create');
    }
    public function edit($id){
        $requeriment = Requeriment::find($id);
        return view('administrador.requeriments.edit', compact('requeriment'));
    }
    public function update(Request $request, $id){
        $requeriment = Requeriment::find($id)->update($request->all());
        return redirect()->route('requeriments.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $requeriment = Requeriment::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $requeriment = Requeriment::find($id);
        return view('administrador.requeriments.show', compact('requeriment'));
    }
}
