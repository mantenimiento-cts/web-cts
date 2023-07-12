<?php

namespace App\Http\Controllers\Soporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requeriment;

class RequerimentsController extends Controller
{
    public function index(){
        $requerimientos = Requeriment::all();
        return view('soporte.requeriments.index', compact('requerimientos'));
    }
    public function store(Request $request){
        $requerimiento = Requeriment::create($request->all());
        return redirect()->route('requerimientos.index')->with('success', 'se ha creado un requerimiento');
    }
    public function create(){
        return view('soporte.requeriments.create');
    }
    public function edit($id){
        $requerimiento = Requeriment::find($id);
        return view('soporte.requeriments.edit', compact('requeriment'));
    }
    public function update(Request $request, $id){
        $requerimiento = Requeriment::find($id)->update($request->all());
        return redirect()->route('requeriments.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $requerimiento = Requeriment::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $requerimiento = Requeriment::find($id);
        return view('soporte.requeriments.show', compact('requerimiento'));
    }
}
