@extends('layouts.admin')

@section('contenido')
<div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  @if(Session::has('mensaje'))
                    <div class="panel_mensajes">
                      <h2 class="mensajes"> 
                          {{Session::get('mensaje')}}
                      </h2>
                    </div>            
                  @endif
                  @if(Session::has('mensaje_error'))
                    <div class="panel_mensajes_error">
                      <h2 class="mensajes_error"> 
                          {{Session::get('mensaje_error')}}
                      </h2>
                    </div>            
                  @endif
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nuevo Vendedor </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate action="{{ url('/vendedor/guardar')}}" method="POST">
                    {{ csrf_field() }} 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" placeholder="Escribe el nombre" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido_paterno">Apellido Paterno <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="apellido_materno" name="apellido_paterno" required="required" placeholder="Escribe el apellido paterno" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido_materno">Apellido Materno 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Escribe el apellido materno" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Correo Electrónico <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" type="email" name="email" data-validate-length-range="5,100" class="optional form-control col-md-7 col-xs-12" required="required" placeholder="Ej. usuario@gmail.com">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Aceptar</button>
                          <a href="{{url('/home')}}" type="button" class="btn btn-danger">Cancelar</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@stop
