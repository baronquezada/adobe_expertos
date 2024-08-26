<div class="modal fade lg" id="verModal" tabindex="-1" role="dialog" aria-labelledby="verModalLabel" aria-hidden="true">

	<div class="modal-dialog modal-lg">

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h4 class="modal-title">Editar id <span></span></h4>
			</div><!-- .modal-header -->

			<div class="modal-body">
				
				<form id="editarHosting" method="post" action="<?php site_url( $_SERVER['REQUEST_URI'] ); ?>" class="form-horizontal" role="form">

		            <div class="form-group">
					    <label for="select-cuenta-modal" class="col-sm-2 control-label">Tipo Cuenta:</label >
					    <div class="col-sm-9">
					    	<select name="select-cuenta-modal" id="select-cuenta-modal" class="form-control">
								<option value="dominio">Dominio</option>
								<option value="hosting">Hosting</option>
								<option value="ssl">SSL</option>
								<option value="otro">Otro</option>
							</select>
					    </div>
					    <div class="tipocuenta-modal noVer">
						    <div class="mb10 clear"></div>
						    <div class="col-sm-2"></div>
						    <div class="col-sm-9 ">
						    	<input type="text" class="form-control" name="tipo-cuenta-modal" id="tipo-cuenta-modal" placeholder="Tipo Cuenta">
						    </div>
					    </div>
					</div>

					<div class="form-group">
			    		<label for="fechaPicker1-modal" class="col-sm-2 control-label">Fecha Inicio:</label>
						<div class="col-sm-4">
							<div class="input-append date" id="dp1-modal" data-date="" data-date-format="yyyy-mm-dd">
								<input name="fechaPicker1-modal" id="fechaPicker1-modal" class="span2" size="16" type="text" value="2014-11-01" readonly="">
								<span class="add-on"><i class="glyphicon glyphicon-calendar"></i></span>
							</div>
						</div>

			    		<label for="fechaPicker2-modal" class="col-sm-2 control-label">Fecha Vencimiento:</label>
						<div class="col-sm-4">
							<div class="input-append date" id="dp2" data-date="" data-date-format="yyyy-mm-dd">
								<input name="fechaPicker2-modal" id="fechaPicker2-modal" class="span2" size="16" type="text" value="2014-11-01" readonly="">
								<span class="add-on"><i class="glyphicon glyphicon-calendar"></i></span>
							</div>
						</div>
					</div>

					<div class="form-group">
					    <label for="costo-dominio-modal" class="col-sm-2 control-label">Costo Dominio:</label >
					    <div class="col-sm-9">
					    	<input type="text" class="form-control" name="costo-dominio-modal" id="costo-dominio-modal" placeholder="Costo Dominio" required/>
					    </div>
					</div>

					<div class="form-group">
					    <label for="empresa-cliente-modal" class="col-sm-2 control-label">Empresa Cliente:</label >
					    <div class="col-sm-9">
					    	<input type="text" class="form-control" name="empresa-cliente-modal" id="empresa-cliente-modal" placeholder="Empresa Cliente" required/>
					    </div>
					</div>

					<div class="form-group">
					    <label for="select-hosting-modal" class="col-sm-2 control-label">Empresa Hosting:</label>
					    <div class="col-sm-9">
					    	<select name="select-hosting-modal" id="select-hosting-modal" class="form-control">
								<option value="godaddy">GoDaddy</option>
								<option value="hostgator">HostGator</option>
								<option value="bluehost">Bluehost</option>
								<option value="otro">Otro</option>
							</select>
					    </div>

					    <div class="empresa_hosting-modal noVer">
						    <div class="mb10 clear"></div>
						    <div class="col-sm-2"></div>
						    <div class="col-sm-9 ">
						    	<input type="text" class="form-control" name="empresa-hosting-modal" id="empresa-hosting-modal" placeholder="Ejemplo Media Temple">
						    </div>
					    </div>

					</div>

					<div class="form-group">
					    <label for="notificar-caducidad-modal" class="col-sm-2 control-label">Notificar Caducidad</label>
					    <div class="checkbox col-sm-9">
		    				<label>
		      					<input type="checkbox" name="notificar-caducidad-modal" id="notificar-caducidad-modal"> S&iacute;
		    				</label>
		  				</div>
					</div>

						<div class="datos_notificacion-modal noVer">
							<div class="form-group">
							    <label for="correo-notificacion-modal" class="col-sm-2 control-label">Correo Notificaci&oacute;n:</label>
							    <div class="col-sm-9">
							    	<input type="text" class="form-control" name="correo-notificacion-modal" id="correo-notificacion-modal" placeholder="Correo Notificaci&oacute;n" />
							    </div>
							</div>

							<div class="form-group">
								<label for="cuando-notificar-modal" class="col-sm-2 control-label">Cuando notificar</label>
								<div class="col-sm-9">
								    <select name="select_notificar-modal" id="select_notificar-modal" class="form-control">
										<option value="1ano">1 a&ntilde;o antes</option>
										<option value="1mes">1 mes antes</option>
										<option value="1sem">1 semana antes</option>
										<option value="1dia">1 d&iacute;a antes</option>
									</select>
								</div>
							</div>
						</div>

					<div class="form-group">
						<label for="select-pago-modal" class="col-sm-2 control-label">Metodo de Pago:</label>
						<div class="col-sm-9">
						    <select name="select-pago-modal" id="select-pago-modal" class="form-control">
								<option value="transferencia">Transferencia</option>
								<option value="paypal">Paypal</option>
								<option value="deposito">Deposito</option>
								<option value="otro">Otro</option>
							</select>
						</div>

						<div class="pago_transferencia-modal">
						    <div class="mb10 clear"></div>
						    <label for="pago-banco-modal" class="col-sm-2 control-label">Ultimos 4 digitos</label>
						    <div class="col-sm-9 ">
						    	<input type="text" class="form-control" name="pago-banco-modal" id="pago-banco-modal" maxlength="4" size="4" placeholder="1234" onKeyPress="return checkNumero(event)">
						    </div>
					    </div>

					    <div class="pago_paypal-modal noVer">
						    <div class="mb10 clear"></div>
						    <label for="pago-paypal-modal" class="col-sm-2 control-label">Usuario Paypal</label>
						    <div class="col-sm-9 ">
						    	<input type="text" class="form-control" name="pago-paypal-modal" id="pago-paypal-modal" placeholder="usuario@paypal.com">
						    </div>
					    </div>

					    <div class="pago_deposito-modal noVer">
						    <div class="mb10 clear"></div>
						    <label for="pago-deposito-modal" class="col-sm-2 control-label">Pago Deposito</label>
						    <div class="col-sm-9 ">
						    	<input type="text" class="form-control" name="pago-deposito-modal" id="pago-deposito-modal" placeholder="Ejemplo Santander">
						    </div>
					    </div>

					    <div class="pago_otro-modal noVer">
						    <div class="mb10 clear"></div>
						    <label for="pago-otro" class="col-sm-2 control-label">Otro tipo pago</label>
						    <div class="col-sm-9 ">
						    	<input type="text" class="form-control" name="pago-otro-modal" id="pago-otro-modal" placeholder="Ejemplo Efectivo">
						    </div>
					    </div>

					</div>

					<div class="form-hidden">
						<?php $user_ID = get_current_user_id(); ?> 
		        		<input type="hidden" name="usuarioId" id="usuarioId" value="<?= $user_ID; ?>" >
		            	<input type="hidden" name="action" value="editarHosting" >
		            	<?php wp_nonce_field('editarHosting'); ?>
		            </div>
		            <div class="form-group">
		            	<div class="col-sm-7"></div>
						<div class="col-sm-4">
				           <!--  <input type="reset" class="btn btn-default" name="editarReset" id="editarReset" value="Cancelar"> -->
				           	<input type="submit" class="btn btn-danger"  name="eliminarSubmit-modal" id="eliminarSubmit-modal" 	value="Eliminar Dominio" data-id-eliminar="">
				            <input type="submit" class="btn btn-primary" name="editarSubmit-modal"   id="editarSubmit-modal" 	value="Editar Dominio">
				        </div>
				    </div>
		        </form>
			</div> <!-- .modal-body -->


		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div> <!-- #verModal -->