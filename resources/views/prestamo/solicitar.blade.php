@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Solicitud de Préstamo</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data"> {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="cantidad" class="col-md-4 control-label">Cantidad a solicitar</label>
                            <div class="col-md-6">
                                <input id="importe" type="number" class="form-control" name="importe" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="comprobante_domicilio" class="col-md-4 control-label">Comprobante de domicilio</label>
                            <div class="col-md-6">
                                <input id="comprobante" type="file" class="form-control" name="comprobante" value="" required>
                            </div>
                        </div>                            
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="ingreso_mensual" class="col-md-4 control-label">Ingreso Mensual</label>
                            <div class="col-md-6">
                                <input id="ingreso_mensual" type="number" class="form-control" name="importe" value="" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="comprobante_ingresos" class="col-md-4 control-label">Comprobante de ingresos</label>
                            <div class="col-md-6">
                                <input id="comprobante_ingresos" type="file" class="form-control" name="comprobante_ingresos" value="">
                            </div>
                        </div>                                
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="comprobante_ingresos" class="col-md-4 control-label">Identificación oficial</label>
                            <div class="col-md-6">
                                <input id="comprobante_ingresos" type="file" class="form-control" name="comprobante_ingresos" value="">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="tipo_interes" class="col-md-4 control-label">Tipo de Interés</label>
                            <div class="col-md-6">
                                <select name="tipo_interes" class="form-control" >
                                    <option value="1">Fijo</option>
                                    <option value="2">Variable</option>
                                </select>
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Aceptar
                                </button>
                                <a href="{{url('/home')}}" class="btn btn-danger">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
