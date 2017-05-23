@extends('layouts.admin')

@section('contenido')
<div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Solicitud de Préstamo </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate action="{{ url('/prestamo/guardar')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }} 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="importe">Cantidad a solicitar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="importe" name="importe" required="required" data-validate-minmax="1000,20000" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ingreso_mensual">Ingreso mensual <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="ingreso_mensual" name="ingreso_mensual" required="required" data-validate-minmax="1000,100000" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identificacion_oficial">Identificación oficial <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="identificacion_oficial" name="identificacion_oficial" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comprobante_domicilio">Comprobante de domicilio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="comprobante_domicilio" type="file" name="comprobante_domicilio" class="optional form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Aceptar</button>
                          <button type="submit" class="btn btn-danger">Cancelar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@stop
