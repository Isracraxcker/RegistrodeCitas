	<!-- Modal-edit -->
									<div class="modal fade" id="editRowModal_<?php echo $va['codhor']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
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
											
													<form method="POST" action="../view/horario/obtener.php?id=<?php echo $va['codhor']; ?>">
															
														<div class="row">
															
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Nombres</label>
															
															<input type="text" class="form-control" name="nomhor" value="<?php echo $va['nomhor']; ?>">
																</div>
															</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Medicos</label>
								<select class="form-control"  required="" name="coddoc">
									<option value="<?php echo $va['coddoc'];?>"><?php echo $va['nomdoc'];?></option>


									<?php 
                                                            $dbhost = 'localhost';
                                                            $dbname = 'proyecto_final';  
                                                            $dbuser = 'root';                  
                                                            $dbpass = '';                  
                                                            
                                                            try{
                                                            
                                                            $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
                                                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                            
                                                            }catch(PDOException $ex){
                                                            
                                                            die($ex->getMessage());
                                                            }
                                                            $stmt = $dbcon->prepare('SELECT * FROM doctor');
                                                                    $stmt->execute();
                                                                    
                                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                                                    {
                                                                        extract($row);
                                                                        ?>
                                                                        <option value="<?php echo $coddoc; ?>"><?php echo $nomdoc; ?></option>
                                                                        <?php
                                                                    }
                                                                        ?>
                                                        ?>
								
				
								</select>
							</div>
						</div>
															
															
														</div>
														
													
													</div>
													<div class="modal-footer no-bd">
													
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="submit" name="editar" class="btn btn-primary">Edit
													</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									
									
								<!-- Delete -->
<div class="modal fade" id="deleteRowModal<?php echo $va['codhor']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de borrar el registro?</p>
				<h2 class="text-center"><?php echo $va['nomhor']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../view/horario/BorrarRegistro.php?codhor=<?php echo $va['codhor']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
            </div>

        </div>
    </div>
</div>	
									
									