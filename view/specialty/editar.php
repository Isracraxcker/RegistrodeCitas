	<!-- Modal-edit -->
									<div class="modal fade" id="editRowModal<?php echo $row['codespe']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Editar</span> 
														
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
											
													 
													<form  method="POST" action="../view/specialty/obtener.php?codespe=<?php echo $row['codespe']; ?>">
															 	
													<input class="form-control" name="codespe"   type="hidden" value="<?php echo $row->codespe; ?>">
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Nombre</label>
															
															<input type="text" class="form-control" name="nombrees" value="<?php echo $row['nombrees']; ?>">
																</div>
															</div>
															
															
														</div>
														
													
													</div>
													<div class="modal-footer no-bd">
														<button type="submit" name="editar" class="btn btn-primary">Edit
													
													
													</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									
									
								<!-- Delete -->
<div class="modal fade" id="deleteRowModal<?php echo $row['codespe']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de borrar el registro?</p>
				<h2 class="text-center"><?php echo $row['nombrees']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../view/specialty/BorrarRegistro.php?codespe=<?php echo $row['codespe']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
            </div>

        </div>
    </div>
</div>	

<!--- AGREGAR-->
									
									