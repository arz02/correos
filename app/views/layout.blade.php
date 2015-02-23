<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="{{URL::to("/img/email-icon.png")}}" sizes="185x185"/>
        <title>
            @section('titulo')
                Correos::Inicio
            @show
        </title>
        {{ HTML::style('css/materialize.css') }}
        {{ HTML::style('css/style.css') }}
        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('js/materialize.js') }}
        {{ HTML::script('js/dropzone.js') }}
    </head>
    
    <body>
    	<div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper cyan darken-1">
                    <a href="#" style="height:100%;" class="brand-logo"><img src="{{URL::to('img/email-icon.png')}}" style="position:relative;height:100%;" /><span style="top:-30%;">Correos</span></a>
                 </div>
            </nav>
       	</div>
        <br >
        <div class="row">
        	<div class="col s3">
              <div class="row">
	 	        <br><br>
                <div class="col s12">
                  <div class="card small z-depth-2">
                      <h4 class="cyan-text text-darken-1">&ensp;Menu</h4>
                      <div class="collection">
                         @yield("menu")
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s9">
            	<div class="row" style="margin:0;">
    				<div class="col s3">
	            		@yield("btn-area")
                    </div>
                </div>
            	<div class="row" style="border-top:1px solid #999;">
                	<div class="col s1">
                    </div>
                    <div id="content" class="col s12">
                        @yield("content")
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>