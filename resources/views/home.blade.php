@extends('layouts.admin')

@section('contenido')
	<h1>Hola {{ Auth::user()->usuario }}, esperamos que estés teniendo un excelente dia.</h1>
	<h2>Puedes acceder a las opciones del sistema en el menu de la izquierda.</h2>
@stop
