@extends('layouts.master')

@section('titulo')
	Contactar
@stop

@section('navegacion')
	<a href="sobre">Sobre nosotros</a>
@stop

@section('contenido')
Contactar
@stop

{!! Form::open(array('url' => 'pruebas')) !!}
{!! Form::label('nombre', 'Introduzca nombre:')  !!}
{!! Form::text('nombre')!!}
{!! Form::submit('Enviar')!!}	
{!! Form::close() !!}


