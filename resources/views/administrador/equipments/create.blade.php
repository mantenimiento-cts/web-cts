@extends('layouts.administrador')
@section('content')
    

    <div class="container">
		<div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h1>REGISTRAR NUEVO EQUIPO</h1>
                        <form action="{{route('equipments.store')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">MARCA</label>
                                <input type="text" class="form-control" name="mark" required placeholder="INGRESAR MARCA">
                            </div>
                            <div class="form-group">
                                <label for="">MODELO</label>
                                <input type="text" class="form-control" name="model" required placeholder="INGRESAR MODELO">
                            </div>
                            <div class="form-group">
                                <label for="">SERIAL</label>
                                <input type="text" class="form-control" name="serial" required placeholder="INGRESAR SERIAL">
                            </div>
                            <div class="form-group">
                                <label for="">TAMAÑO DISCO</label>
                                <input type="text" class="form-control" name="size_disk" required placeholder="INGRESAR TAÑAÑO DE DISCO">
                            </div>
                            <div class="form-group">
                                <label for="">TIPO DISCO</label>
                                <input type="text" class="form-control" name="type_disk" required placeholder="INGRESAR TIPO DE DISCO">
                            </div>
                            <div class="form-group">
                                <label for="">RAM</label>
                                <input type="text" class="form-control" name="ram" required placeholder="INGRESAR MEMORIA RAM">
                            </div>
                            <div class="form-group">
                                <label for="">PROCESADOR</label>
                                <input type="text" class="form-control" name="processor" required placeholder="INGRESAR PROCESADOR">
                            </div>
                            <div class="form-group">
                                <label for="">SISTEMA OPERATIVO</label>
                                <input type="text" class="form-control" name="system" required placeholder="INGRESAR SISTEMA OPERATIVO">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS USB</label>
                                <input type="text" class="form-control" name="usb_ports" required placeholder="INGRESAR PUERTOS USB">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS AUDIO</label>
                                <input type="text" class="form-control" name="audio_ports" required placeholder="INGRESAR PUERTOS AUDIO">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS MICROFONO</label>
                                <input type="text" class="form-control" name="microphone_ports" required placeholder="INGRESAR PUERTOS MICROFONO">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS HDMI</label>
                                <input type="text" class="form-control" name="hdmi_ports" required placeholder="INGRESAR PUERTOS HDMI">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS VGA</label>
                                <input type="text" class="form-control" name="vga_ports" required placeholder="INGRESAR PUERTOS VGA">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS DVI</label>
                                <input type="text" class="form-control" name="dvi_ports" required placeholder="INGRESAR PUERTOS DVI">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS SD</label>
                                <input type="text" class="form-control" name="sd_ports" required placeholder="INGRESAR PUERTOS SD">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS CD</label>
                                <input type="text" class="form-control" name="cd_ports" required placeholder="INGRESAR PUERTOS CD">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS PS2</label>
                                <input type="text" class="form-control" name="ps2_ports" required placeholder="INGRESAR PUERTOS PS2">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                            <a href= "" class="btn btn-link">CANCELAR</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
    @endsection
