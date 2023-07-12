<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index(){
        $status = Status::all();
        return view('administrador.status.index', compact('status'));
    }
    public function store(Request $request){
        $statu = Status::create($request->all());
        return redirect()->route('status.index')->with('success', 'se ha creado un nuevo cliente');
    }
    public function create(){
        return view('administrador.status.create');
    }
    public function edit($id){
        $statu = Status::find($id);
        return view('administrador.status.edit', compact('statu'));
    }
    public function update(Request $request, $id){
        $statu = Status::find($id)->update($request->all());
       return redirect()->route('status.index')->with('success', 'se ha actualizado el status');
    }
    public function destroy($id){
        $statu = Status::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');
    }
    public function show($id){
        $statu = Status::find($id);
        return view('administrador.status.show', compact('statu'));
    }
}
