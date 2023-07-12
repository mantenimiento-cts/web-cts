<?php

namespace App\Http\Controllers\Tecnico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requeriment;

class RequerimentsController extends Controller
{
    public function index(){
        $requeriments = Requeriment::all();
        return view('tecnico.requeriments.index', compact('requeriments'));
    }
    public function show($id){
        $requeriment = Requeriment::find($id);
        return view('tecnico.requerimentoos.show', compact('requeriment'));
    }
}
