<?php

class Grupo extends Eloquent {

	protected $table = 'grupos';
	
	public function contactos()
    {
        return $this->belongsToMany('Contacto', 'grupos_contactos', 'grupo_id', 'contacto_id');
    }

}

?>
