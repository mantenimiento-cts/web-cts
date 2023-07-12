<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('administrador.users.index',compact('users'));
    }
    public function store(Request $request){
        $user = User::create($request->all());
        return redirect()->route('users.index')->with('success', 'se ha creado un requerimento');
    }
    public function create(){
        return view('administrador.users.create');
    }
    public function edit($id){
        $user = User::find($id);
        return view('administrador.users.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = User::find($id)->update($request->all());
        return redirect()->route('users.index')->with('success', 'se ha actualizado el requerimiento');
    }
    public function destroy($id){
        $user = User::find($id)->delete();
        return back()->with('success', 'se ha eliminado el requerimiento');

    }
    public function show($id){
        $user = User::find($id);
        return view('administrador.users.show', compact('user'));
    }
}
