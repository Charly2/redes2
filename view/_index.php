<div class="container" style="padding-top: 1em;">
      

      <div class="row">
            <div class="col-md-3">
               <h3 class="text-center">Creadas</h3>
               <?php foreach ($actividadA as $ac) { ?>
                <div class="card text-center" id="act_<?php echo $ac['idactividad']?>">
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $ac['titulo']?></a>
                    </h4>
                    <p class="card-text"><?php echo $ac['body']?></p>
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pasar a
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,2)" >Iniciada</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,3)" >En Proceso</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,4)" >Finalizada</li>
                      </ul>
                    </div>
                    
                   
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-3" id="e2">
              <h3 class="text-center">Iniciadas</h3>
              <?php foreach ($actividadB as $ac) { ?>
                <div class="card text-center" id="act_<?php echo $ac['idactividad']?>">
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $ac['titulo']?></a>
                    </h4>
                    <p class="card-text"><?php echo $ac['body']?></p>
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pasar a
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,2)" >Iniciada</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,3)" >En Proceso</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,4)" >Finalizada</li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-3" id="e3">
               <h3 class="text-center">En Proceso</h3>
               <?php foreach ($actividadC as $ac) { ?>
                <div class="card text-center" id="act_<?php echo $ac['idactividad']?>">
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $ac['titulo']?></a>
                    </h4>
                    <p class="card-text"><?php echo $ac['body']?></p>
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pasar a
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,2)" >Iniciada</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,3)" >En Proceso</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,4)" >Finalizada</li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-3" id="e4">
               <h3 class="text-center">Finalizadas</h3>
               <?php foreach ($actividadD as $ac) { ?>
                <div class="card text-center" id="act_<?php echo $ac['idactividad']?>">
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $ac['titulo']?></a>
                    </h4>
                    <p class="card-text"><?php echo $ac['body']?></p>
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pasar a
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,2)" >Iniciada</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,3)" >En Proceso</li>
                        <li onclick="cambia(<?php echo $ac['idactividad'] ?>,4)" >Finalizada</li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>
     
          </div>

      </div>
      <!-- /.row -->

    </div>


<script>
    App.ws.on('cambioa',function(d){
        console.dir(d.a);
        cambiat(d.a,d.d)
    });

     App.ws.on('nuevo',function(d){
        setTimeout(function (){
          window.location.reload();
        }, 1500);
        
    });


    function cambiat(e,d) {
    var ele = $('#act_'+e)
      var aux = ele;
      var des = $('#e'+d);
      console.log(ele)
      ele.remove();
      des.append(aux);
      console.log(des)
      console.log("pasa "+ e + "  a estado "+d);
      
  }      

  function cambia(e,d) {
    var ele = $('#act_'+e)
      var aux = ele;
      var des = $('#e'+d);
      console.log(ele)
      ele.remove();
      des.append(aux);
      console.log(des)
      console.log("pasa "+ e + "  a estado "+d);
      App.ws.emit('cambio',{'a':e,'d':d});
      $.post( "update.php", { estado: d, id: e }).done(function( data ) {
        if (data == '1') {

        }else{

        }
      });
  }      
</script>