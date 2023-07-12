@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{route('equipments.update', $equipment->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>MARCA</th>
                                <th><input type="text" class="form-control" name="mark" value=""></th>
                            </tr>
                            <tr>
                                <th>MODELO</th>
                                <td><input type="text" class="form-control" name="model" value=""></td>
                            </tr>
                            <tr>
                                <th>SERIAL</th>
                                <td><input type="text" class="form-control" name="serial" value=""></td>
                            </tr>
                            <tr>
                                <th>TAMAÑO DISCO</th>
                                <td><input type="text" class="form-control" name="size_disk" value=""></td>
                            </tr>
                            <tr>
                                <th>TIPO DISCO</th>
                                <td><input type="text" class="form-control" name="type_disk" value=""></td>
                            </tr>
                            <tr>
                                <th>RAM</th>
                                <td><input type="text" class="form-control" name="ram" value=""></td>
                            </tr>
                            <tr>
                                <th>PROCESADOR</th>
                                <td><input type="text" class="form-control" name="processor" value=""></td>
                            </tr>
                            <tr>
                                <th>SISTEMA OPERATIVO</th>
                                <td><input type="text" class="form-control" name="operating_system" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS USB</th>
                                <td><input type="text" class="form-control" name="usb_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS AUDIO</th>
                                <td><input type="text" class="form-control" name="audio_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS MICROFONO</th>
                                <td><input type="text" class="form-control" name="microphone_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS HDMI</th>
                                <td><input type="text" class="form-control" name="hdmi_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS VGA</th>
                                <td><input type="text" class="form-control" name="vga_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS DVI</th>
                                <td><input type="text" class="form-control" name="dvi_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS SD</th>
                                <td><input type="text" class="form-control" name="sd_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS CD</th>
                                <td><input type="text" class="form-control" name="cd_ports" value=""></td>
                            </tr>
                            <tr>
                                <th>PUERTOS PS2</th>
                                <td><input type="text" class="form-control" name="ps2_ports" value=""></td>
                            </tr>
                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">ACTUALIZAR</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href= "{{route('equipments.index')}}" class="btn btn-link w-100">INICIO</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
    @endsection
