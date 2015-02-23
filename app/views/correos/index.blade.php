@extends('layout')

@section('titulo')
	Correos::Correo
@stop

@section('menu')
<a href="/correos" class="collection-item white-text cyan darken-1">Enviados</a>
<a href="cuentas" class="collection-item cyan-text text-darken-1">Cuentas</a>
<a href="grupos" class="collection-item cyan-text text-darken-1">Grupos</a>
<a href="contactos" class="collection-item cyan-text text-darken-1">Contactos</a>
@stop
	
@section('btn-area')
      <div class="valign-wrapper cyan-text text-darken-1 font2">
         <a href="javascript:void(0);" class="btn-floating btn-large waves-effect waves-light cyan" onclick="redactarCorreo();"><i class="mdi-content-add"></i></a>
         <span class="valign">&nbsp;Redactar correo</span>
      </div>
@stop

@section("content")
<div class="row">
	<div class="col s12" id="correoContent">
    </div>
</div>
<script>
	function redactarCorreo()
	{
		var html = $.ajax("/correos/correos/nuevo", {async:false}).responseText;
		$("#correoContent").html(html);
	}
</script>
@stop