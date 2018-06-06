<div class="container">
      <h2 class="text-center">Nueva Actividad</h2>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 ">
			<form action="nuevo.php" id="n" method="POST"> 
			  <div class="form-group">
			    <label for="exampleInputEmail1">Titulo</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo" name="titu">
			    <small id="emailHelp" class="form-text text-muted">Debe describir brevemente la actividad</small>
			  </div>
			  
			  
			  
			  <div class="form-group">
			    <label for="exampleTextarea">Descripción</label>
			    <textarea name="des" class="form-control" id="exampleTextarea" rows="3"></textarea>
			  </div>
			  
			  
			  
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>	
</div>

<script>
	$( "#n" ).on('submit',function (argument) {
		App.ws.emit('new',1);
	});
</script>