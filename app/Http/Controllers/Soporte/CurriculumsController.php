<?php

namespace App\Http\Controllers\Soporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumsController extends Controller
{
    public function index(){
        $curriculum = Curriculum::all();
        return view('soporte.curriculums.index', compact('curriculum'));
    }
    public function store(Request $request){
        $curriculum = Curriculum::create($request->all());
        return redirect()->route('curriculum.index')->with('success', 'se ha creado un requerimento');
    }
    public function create(){
        return view('soporte.curriculums.create');
    }
    public function edit($id){
        $curriculum = Curriculum::find($id);
        return view('soporte.curriculums.edit', compact('curriculum'));
    }
    public function update(Request $request, $id){
        $curriculum = Curriculum::find($id)->update($request->all());
        return redirect()->route('curriculum.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $curriculum = Curriculum::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $curriculum = Curriculum::find($id);
        return view('soporte.curriculums.show', compact('curriculum'));
    }
}
