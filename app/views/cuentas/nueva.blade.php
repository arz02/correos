<div class="col offset-s1 s10">
	
    <div class="row">
      <form class="col s12" onSubmit="test();return false;">
        <div class="row">
          <div class="input-field col s12">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Host</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">De:</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea class="materialize-textarea" id="correoArea" style="display:none"></textarea>
        	<label>Correo</label>
            <div id="imageArea" class="col s12">
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
        
</div>