<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumsController extends Controller
{
    public function index(){
        $curriculums = Curriculum::all();
        return view('administrador.curriculums.index', compact('curriculums'));
    }
    public function store(Request $request){
        $curriculum = Curriculum::create($request->all());
        return redirect()->route('curriculums.index')->with('success', 'se ha guardado el curriculum');
    }
    public function create(){
        return view('administrador.curriculums.create');
    }
    public function edit($id){
        $curriculum = Curriculum::find($id);
        return view('administrador.curriculums.edit', compact('curriculum'));
    }
    public function update(Request $request, $id){
        $curriculum = Curriculum::find($id)->update($request->all());
       return redirect()->route('clients.index')->with('success', 'se ha actualizado el cliente');
    }
    public function destroy($id){
        $curriculum = Curriculum::find($id)->delete();
        return back()->with('success', 'se ha eliminado el curriculum');
    }
    public function show($id){
        $curriculum = Curriculum::find($id);
        return view('administrador.curriculums.show', compact('curriculum'));
    }
}
