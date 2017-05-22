@extends('layouts.admin')

@section('contenido')
<div class="">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Catálogo de Clientes 
                      @if (Auth::user()->tipo==2)    
                        <a href="{{ url('/cliente/registrar') }}" type="button" class="btn btn-xs btn-primary">Nuevo
                        </a>
                      @endif
                    </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Id </th>
                            <th class="column-title">Nombre Completo </th>
                            <th class="column-title">Fecha de Nacimiento </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Estado Civil </th>
                            <th class="column-title no-link last"><span class="nobr">Acción</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Acciones ( <span class="action-cnt">
                               </span> ) <i class="fa fa-chevron-down">
                                
                              </i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $c)
                          <tr class="even pointer">
                            <td class=" ">{{ $c->id }}</td>
                            <td class=" ">{{ $c->usuario }}</td>
                            <td class=" ">{{ $c->fecha_nacimiento }}</td>
                            <td class=" ">{{ $c->estatus }}</td>
                            <td class=" ">{{ $c->estado_civil }}</td>
                            <td>
                            @if ($c->estatus==0)
                                <a href="{{ url('/cliente/habilitar/{id}') }}" type="button" class="btn btn-xs btn-success">Habilitar
                                </a>
                            @else    
                                <a href="{{ url('/prestamo/deshabilitar/{id}') }}" type="button" class="btn btn-xs btn-danger" >Deshabilitar
                                </a>
                            @endif    
                            </td>
                          </tr>
                         @endforeach 
                        </tbody>
                      </table>
                    </div>
        </div>  
      </div>
    </div>  
   </div>       
@stop
