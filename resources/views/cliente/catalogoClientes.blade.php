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
                            <th class="column-title">Teléfono </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Estado Civil </th>
                            @if (Auth::user()->tipo==2)    
                              <th class="column-title no-link last"><span class="nobr">Acción</span>
                              </th>
                            @endif 
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $c)
                          <tr class="even pointer">
                            <td class=" ">{{ $c->id }}</td>
                            <td class=" ">{{ $c->usuario }}</td>
                            <td class=" ">{{ $c->fecha_nacimiento }}</td>
                            <td class=" ">{{ $c->telefono }}</td>
                            <td class=" ">@if ($c->estatus==1) Activo @else Inactivo @endif  </td>
                            <td class=" ">{{ $c->estado_civil }}</td>
                            @if (Auth::user()->tipo==2)  
                              <td>  
                                @if ($c->estatus==0)
                                  <a href="{{ url('/cliente/habilitar/{id}') }}" type="button" class="btn btn-xs btn-success">Habilitar
                                  </a>
                                @else    
                                  <a href="{{ url('/cliente/deshabilitar/{id}') }}" type="button" class="btn btn-xs btn-danger" >Deshabilitar
                                  </a>
                                @endif
                              </td>    
                            @endif    
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
