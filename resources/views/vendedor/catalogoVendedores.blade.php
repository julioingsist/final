@extends('layouts.admin')

@section('contenido')
<div class="">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Catálogo de Vendedores  <a href="{{ url('/vendedor/registrar') }}" type="button" class="btn btn-xs btn-primary">Nuevo
                                </a></h2> 

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">ID</th>
                            <th class="column-title">Nombre Completo</th>
                            <th class="column-title">Correo Electrónico</th>
                            <th class="column-title">Estatus</th>
                            <th class="column-title">Teléfono</th>
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
                        @foreach($vendedores as $v)
                          <tr class="even pointer">
                            <td class=" ">{{ $v->id }}</td>
                            <td class=" ">{{ $v->usuario  }}</td>
                            <td class=" ">{{ $v->email }}</td>
                            <td class=" ">@if ($v->estatus==1) Activo @else Inactivo @endif  </td>
                            <td class=" ">{{ $v->telefono }}</td>
                            <td>
                            @if ($v->estatus==0)
                                <a href="{{ url('/vendedor/habilitar/{$v->id}') }}" type="button" class="btn btn-xs btn-success">Habilitar
                                </a>
                            @else    
                                <a href="{{ url('/vendedor/deshabilitar/{$v->id}') }}" type="button" class="btn btn-xs btn-danger" >Deshabilitar
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
