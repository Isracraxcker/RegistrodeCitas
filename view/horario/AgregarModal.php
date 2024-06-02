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
				
		<form method="POST" autocomplete="off" enctype="multipart/form-data">
					<div class="row">
						
						<div class="col-md-6 pr-0">
							<div class="form-group form-group-default">
								<label>Nombre</label>
								<input name="nomhor" required="" type="text" class="form-control" placeholder="Ingrese nombre">
							</div>
						</div>
						
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Medicos</label>
								<select class="form-control" id="doctor" required="" name="coddoc">
								
				
								</select>
							</div>
						</div>
						
					</div>
			
            </div>

        </div>
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar
				
				
				</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			</form>
			
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->