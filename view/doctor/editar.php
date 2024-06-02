	<!-- Modal-edit -->
									<div class="modal fade" id="editRowModal_<?php echo $va['coddoc']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
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
											
													 
													
													<form method="POST" action="../view/doctor/obtener.php?id=<?php echo $va['coddoc']; ?>">
															 	
													
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>DNI</label>
															
															<input type="text" class="form-control" maxlength="8" name="dnidoc" value="<?php echo $va['dnidoc']; ?>">
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Nombres</label>
															
															<input type="text" class="form-control" name="nomdoc" value="<?php echo $va['nomdoc']; ?>">
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Apellidos</label>
															
															<input type="text" class="form-control" name="apedoc" value="<?php echo $va['apedoc']; ?>">
																</div>
															</div>
															
															
															<div class="col-md-6">
																<div class="form-group form-group-default" >
																	<label>Sexo</label>
															
															
															
															<select class="form-control" name="sexo" value="<?php echo $va['sexo'];?>" >
															<option value="Masculino">Masculino</option>
															<option value="Femenino">Femenino</option>
															</select>
															
															
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Teléfono</label>
															
															<input type="text" class="form-control" maxlength="9" name="telefo" value="<?php echo $va['telefo']; ?>">
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Fecha nacimiento</label>
															
															<input type="date" class="form-control" name="fechanaci" value="<?php echo $va['fechanaci']; ?>">
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Correo</label>
															
															<input type="text" class="form-control" name="correo" value="<?php echo $va['correo']; ?>">
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Nacionalidad</label>
															
															
															<select class="form-control" name="naciona" value="<?php echo $va['naciona'];?>" >
															<option value="Peruana(o)">Peruana(o)</option>
															<option value="Venezolana(o)">Venezolana(o)</option>
															<option value="Argentina(o)">Argentina(o)</option>
															<option value="Ecuatoriana(o)">Ecuatoriana(o)</option>
															<option value="Uruguaya(o)">Uruguaya(o)</option>
															</select>
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
<div class="modal fade" id="deleteRowModal<?php echo $va['coddoc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de borrar el registro?</p>
				<h2 class="text-center"><?php echo $va['nomdoc']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../view/doctor/BorrarRegistro.php?coddoc=<?php echo $va['coddoc']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
            </div>

        </div>
    </div>
</div>	
									
									