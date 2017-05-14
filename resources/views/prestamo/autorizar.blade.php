@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Autorización de Préstamos</div>
                <div class="panel-body">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th>Préstamo</th>
                                <th>Fecha</th>
                                <th>Importe</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prestamos as $p)
                            <tr>
                                <td>$p->id</td>
                                <td>$p->fecha</td>
                                <td>$p->cliente_id</td>
                                <td>
                                    <a href="" class="btn btn-xs btn-primary">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                    <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
