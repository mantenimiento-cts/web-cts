@extends('layouts.administrador')
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>MARCA</th>
                        <td>{{$equipment->mark}}</td>
                    </tr>
                    <tr>
                        <th>MODELO</th>
                        <td>{{$equipment->model}}</td>
                    </tr>
                    <tr>
                        <th>SERIAL</th>
                        <td>{{$equipment->serial}}</td>
                    </tr>
                    <tr>
                        <th>TAMAÑO DISCO</th>
                        <td>{{$equipment->size_disk}}</td>
                    </tr>
                    <tr>
                        <th>TIPO DISCO</th>
                        <td>{{$equipment->type_disk}}</td>
                    </tr>
                    <tr>
                        <th>RAM</th>
                        <td>{{$equipment->ram}}</td>
                    </tr>
                    <tr>
                        <th>PROCESADOR</th>
                        <td>{{$equipment->processor}}</td>
                    </tr>
                    <tr>
                        <th>SISTEMA OPERATIVO</th>
                        <td>{{$equipment->system}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS USB</th>
                        <td>{{$equipment->usb_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DE AUDIO</th>
                        <td>{{$equipment->audio_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DE MICROFONO</th>
                        <td>{{$equipment->microphone_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS HDMI</th>
                        <td>{{$equipment->hdmi_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS VGA</th>
                        <td>{{$equipment->vga_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DVI</th>
                        <td>{{$equipment->dvi_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS SD</th>
                        <td>{{$equipment->sd_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS CD</th>
                        <td>{{$equipment->cd_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS PS2</th>
                        <td>{{$equipment->ps2_ports}}</td>
                    </tr>
                </table>
                <hr>
                <tr>
                    <a href="{{route('equipments.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
                </tr>
                <hr>
			</div>
        </div>
    </div>
    @endsection
