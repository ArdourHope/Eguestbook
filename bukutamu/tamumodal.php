<form method="POST" action='misc/auth/login.php' >
	<div class="modal fade" id="uidmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">

					<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body mx-3">
					
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Nomer ID</label>
							<input type="ID" id="defaultForm-email " name = "id"  class="form-control form-control-2 validate idfield2" placeholder="Nomer ID" readonly>
						</div>
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Nama Lengkap</label>
							<input type="ID" id="defaultForm-email " name = "id"  class="form-control form-control-2 validate " placeholder="Nama Lengkap">
						</div>
						
							<div class="md-form mb-2 date " data-provide="datepicker">
								<i class="fa fa-user prefix grey-text"></i><label>Tanggal Lahir</label>
							    <input type="text" id="defaultForm-email"  class="form-control form-control-2 " style="width: 100%;padding: .5em .5em; margin: 0px " placeholder="Tanggal Lahir mm/dd/yyyy" >
							    <div class="input-group-addon">
							        <span class="glyphicon glyphicon-th"></span>
							    </div>
							</div>						
						

						
				
						<div class="modal-footer d-flex justify-content-center">
							<button class="btn btn-primary">Next</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>
