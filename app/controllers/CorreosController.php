<?php

class CorreosController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function index()
	{
		return View::make("correos.index");
	}
	
	public function nuevo()
	{
		return (string)View::make("correos.nuevo");
	}
	
	public function images()
	{
		$file = Input::file("file"); 
		$file->move(Config::get("app.imgdir"), $file->getClientOriginalName() );
		$ruta = Config::get("app.imgdir").$file->getClientOriginalName();
		return $file->getClientOriginalName();
	}
	
	public function enviar()
	{
		$re = Mail::send('emails.mail', array('body' => Input::get("correo")), function($message)
		{
   			 $message->to(Input::get("para"))->subject(Input::get("asunto"));
		});
		if($re)
		{
			return (string)View::make("error");
		}
		else
		{
			return (string)View::make("Exito");
		}
	}

}
