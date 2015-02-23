<div class="col offset-s1 s10">
	
    <div class="row">
      <form id="correoForm" class="col s12" onSubmit="enviarCorreo();return false;">
        <div class="row">
          <div class="input-field col s12">
            <input id="para" name="para" type="text" class="validate">
            <label for="para">Para</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="asunto" name="asunto" type="text">
            <label for="asunto">Asunto</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s10">
            <textarea class="materialize-textarea" id="correoArea" name="correo" style="display:none"></textarea>
        	<label>Correo</label>
            <div id="imageArea" class="col s12">
            </div>
          </div>
          <div class="col offset-s10 s2">
          	  <a id="addIMG" onClick="$('#triger').click();" class="btn-floating btn-large waves-effect waves-light cyan"><i class="mdi-content-add"></i></a>	
          </div>
        </div>
        <div class="row" id="respuestaCorreo" style="display:none;">
            <div class="col offset-s4 s4">
              <div class="preloader-wrapper big active">
                  <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>  
            </div>
    	</div>
        <div class="row">
          <div class="input-field col offset-s4 s4">
              <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="mdi-content-send right"></i>
              </button>
          </div>
        </div>
      </form>
</div>
<form action="/correos/correos/images"
      class="dropzone"
      id="imgUpload" method="post" style="display:none"></form>

<a class="btn modal-trigger" id="triger" style="display:none;" href="#modal1">Alert 1</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Agregar link</h4>
      <p>¿Desea agregar un link a la imagen?</p>
      <div class="row">
          <div class="input-field col s6">
            <input id="link" name="link" type="text">
            <label for="link">Link</label>
          </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="javascript:void(0)" onclick="clickImg(true);" class="waves-effect waves-green btn-flat modal-action modal-close">Si</a>
      <a href="javascript:void(0)" onclick="clickImg(false);" class="waves-effect waves-red btn-flat modal-action modal-close">No</a>
    </div>
  </div>

<script>
	var correoArea = $("#correoArea");
	var imgArea = $("#imageArea");
	var respuestaCorreo = $("#respuestaCorreo");
    var linkVal = "";
    var linkImg = false;
    
    function clickImg(link)
    {
        linkImg = link;
        if(linkImg)
        {
            linkVal = $("#link").val();
        }
        $('#imgUpload').click();
    }
	
	function enviarCorreo()
	{
		console.log($("#correoArea").val());
		respuestaCorreo.show();
		$.ajax({
			url:"/correos/correos/enviar",
			type:"POST",
			data:$("#correoForm").serialize(),
			complete: function(data){
				respuestaCorreo.html(data.responseText);
			}
		});
	}
    
   $(function() {
     $('.modal-trigger').leanModal();
	  var myDropzone = new Dropzone("#imgUpload");
	  myDropzone.on("complete", function(file) {
          if(linkImg == true)
          {
		      correoArea.val(correoArea.val()+"<center><a href='"+linkVal+"' target='_blank'><img src='{{URL::to('/')}}'/></a></center>");
		      imgArea.html(imgArea.html()+"<center><a href='"+linkVal+"' target='_blank'><img src='{{URL::to('/img/"+file.name+"')}}'/></a></center>");
          }
          else
          {
              correoArea.val(correoArea.val()+"<center><img src='{{URL::to('/')}}'/></center>");
		      imgArea.html(imgArea.html()+"<center><img src='{{URL::to('/img/"+file.name+"')}}'/></center>");
          }
	  });
   })
</script>