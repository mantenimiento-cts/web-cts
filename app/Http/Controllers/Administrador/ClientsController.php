<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('administrador.clients.index', compact('clients'));
    }
    public function store(Request $request){
        $client = Client::create($request->all());
        return redirect()->route('clients.index')->with('success', 'se ha creado un nuevo cliente');
    }
    public function create(){
        return view('administrador.clients.create');
    }
    public function edit($id){
        $client = Client::find($id);
        return view('administrador.clients.edit', compact('client'));
    }
    public function update(Request $request, $id){
        $client = Client::find($id)->update($request->all());
       return redirect()->route('clients.index')->with('success', 'se ha actualizado el cliente');
    }
    public function destroy($id){
        $client = Client::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');
    }
    public function show($id){
        $client = Client::find($id);
        return view('administrador.clients.show', compact('client'));
    }
}
