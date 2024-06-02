<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
               
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
                <div class="card-body">
			<form method="POST" action="../view/specialty/nuevo.php" autocomplete="off">
                    <div class="row">
					
                     
					  <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input type="text" name="nombrees" class="form-control">
                        </div>
                      </div>
					  
                    </div>
                   
                    <button type="submit" name="agregar" class="btn btn-primary pull-right">Agregar</button>
                    <div class="clearfix"></div>
            </form>
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->