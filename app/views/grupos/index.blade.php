@extends('layout')

@section('titulo')
	Correos::Grupos
@stop

@section('menu')
<a href="correos" class="collection-item cyan-text text-darken-1">Enviados</a>
<a href="cuentas" class="collection-item cyan-text text-darken-1">Cuentas</a>
<a href="grupos" class="collection-item white-text cyan darken-1">Grupos</a>
<a href="contactos" class="collection-item cyan-text text-darken-1">Contactos</a>
@stop
	
@section('btn-area')
        	<a class="waves-effect waves-cyan btn"><i class="mdi-content-add left"></i>Agregar Grupo</a>
@stop