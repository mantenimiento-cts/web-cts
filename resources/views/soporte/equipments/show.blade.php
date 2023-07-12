@extends('layouts.soporte')
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>MARCA</th>
                        <td>{{$equipo->mark}}</td>
                    </tr>
                    <tr>
                        <th>MODELO</th>
                        <td>{{$equipo->model}}</td>
                    </tr>
                    <tr>
                        <th>SERIAL</th>
                        <td>{{$equipo->serial}}</td>
                    </tr>
                    <tr>
                        <th>TAMAÑO DISCO</th>
                        <td>{{$equipo->size_disk}}</td>
                    </tr>
                    <tr>
                        <th>TIPO DISCO</th>
                        <td>{{$equipo->type_disk}}</td>
                    </tr>
                    <tr>
                        <th>RAM</th>
                        <td>{{$equipo->ram}}</td>
                    </tr>
                    <tr>
                        <th>PROCESADOR</th>
                        <td>{{$equipo->processor}}</td>
                    </tr>
                    <tr>
                        <th>SISTEMA OPERATIVO</th>
                        <td>{{$equipo->system}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS USB</th>
                        <td>{{$equipo->usb_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DE AUDIO</th>
                        <td>{{$equipo->audio_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DE MICROFONO</th>
                        <td>{{$equipo->microphone_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS HDMI</th>
                        <td>{{$equipo->hdmi_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS VGA</th>
                        <td>{{$equipo->vga_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DVI</th>
                        <td>{{$equipo->dvi_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS SD</th>
                        <td>{{$equipo->sd_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS CD</th>
                        <td>{{$equipo->cd_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS PS2</th>
                        <td>{{$equipo->ps2_ports}}</td>
                    </tr>
                </table>
                <hr>
                <tr>
                    <th colspan="2"><a href= "{{route('equipos.index')}}" class="btn btn-primary w-30">INICIO</a></th>
                    <td colspan="2"><a href="" class="btn btn-link w-30">EDITAR</a></td>
                </tr>
                <hr>
			</div>
        </div>
    </div>
@endsection
