<?php

namespace App\Http\Controllers\Soporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\status;

class StatusController extends Controller
{
    public function index(){
        $status = Status::all();
        return view('soporte.status.index', compact('status'));
    }
}
