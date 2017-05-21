@extends('layouts.admin')

@section('contenido')
<h1>Hola {{ Auth::user()->usuario }}, Esperamos que estés teniendo un excelente dia.</h1>
<h2>Para realizar alguna acción da clic en el menú de la izquierda.</h2>
@endsection