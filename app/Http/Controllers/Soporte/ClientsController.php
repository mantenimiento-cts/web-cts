<?php

namespace App\Http\Controllers\Soporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index(){
        $clientes = Client::all();
        return view('soporte.clients.index', compact('clientes'));
    }
    public function store(Request $request){
        $cliente = Client::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'se ha creado un requerimento');
    }
    public function create(){
        return view('soporte.clients.create');
    }
    public function edit($id){
        $cliente = Client::find($id);
        return view('soporte.clients.edit', compact('cliente'));
    }
    public function update(Request $request, $id){
        $cliente = Client::find($id)->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $cliente = Client::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $cliente = Client::find($id);
        return view('soporte.clients.show', compact('cliente'));
    }
}
