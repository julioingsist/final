@extends('layouts.admin')

@section('contenido')
<div class="">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Abonos </h2>
                    <div class="clearfix"></div>
                  </div>
                  @if(Session::has('mensaje'))
                    <div class="panel_mensajes">
                      <h2 class="mensajes"> 
                          {{Session::get('mensaje')}}
                      </h2>
                    </div>            
                  @endif  
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Id </th>
                            <th class="column-title">Fecha </th>
                            <th class="column-title">Cliente </th>
                            <th class="column-title">Total </th>
                            <th class="column-title">Saldo </th>
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
                        @foreach($prestamos as $p)
                          <tr class="even pointer">
                            <td class=" ">{{ $p->id }}</td>
                            <td class=" ">{{ $p->fecha }}</td>
                            <td class=" ">{{ $p->cliente }}</td>
                            <td class=" ">{{ $p->total }}</td>
                            <td class=" ">{{ $p->saldo }}</td>
                            <td>
                                <a href="{{ url('/abono/registrar')}}" type="button" class="btn btn-xs btn-success">Registrar Abono
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
