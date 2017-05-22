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
                        @foreach($vendedores as $v)
                          <tr class="even pointer">
                            <td class=" ">{{ $v->id }}</td>
                            <td class=" ">{{ $v->nombre }}</td>
                            <td class=" ">{{ $v->cliente }}</td>
                            <td class=" ">{{ $v->status }}</td>
                            <td class=" ">{{ $v->importe_solicitado }}</td>
                            <td>
                                <a href="{{ url('/prestamo/autorizarPrestamo/{id}') }}" type="button" class="btn btn-xs btn-success">Autorizar
                                </a>
                                <a href="{{ url('/prestamo/rechazar/{id}') }}" type="button" class="btn btn-xs btn-danger" >Rechazar
                                </a>
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
