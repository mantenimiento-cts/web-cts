<?php

namespace App\Http\Controllers\Soporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketsController extends Controller
{
    public function index(){
        $tickets= Ticket::all();
        return view('soporte.tickets.index', compact('tickets'));
    }
    public function store(Request $request){
        $ticket = Ticket::create($request->all());
        return redirect()->route('tickete.index')->with('success', 'se ha creado un requerimento');
    }
    public function create(){
        return view('soporte.tickets.create');
    }
    public function edit($id){
        $ticket = Ticket::find($id);
        return view('tickete.edit', compact('ticket'));
    }
    public function update(Request $request, $id){
        $ticket = Ticket::find($id)->update($request->all());
        return redirect()->route('tickets.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $ticket = Ticket::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $ticket = Ticket::find($id);
        return view('soporte.tickets.show', compact('ticket'));
    }
}
