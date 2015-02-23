@extends('layout')

@section('titulo')
	Correos::Contactos
@stop

@section('menu')
<a href="correos" class="collection-item cyan-text text-darken-1">Enviados</a>
<a href="cuentas" class="collection-item cyan-text text-darken-1">Cuentas</a>
<a href="grupos" class="collection-item cyan-text text-darken-1">Grupos</a>
<a href="contactos" class="collection-item white-text cyan darken-1">Contactos</a>
@stop
	
@section('btn-area')
	<div class="valign-wrapper cyan-text text-darken-1 font2">
        <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="mdi-content-add"></i></a>
        <span class="valign">&nbsp;Nuevo contacto</span>
    </div>
@stop