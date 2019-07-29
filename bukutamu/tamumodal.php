<form method="POST" action='misc/auth/login.php' >
	<div class="modal fade" id="uidmodal1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">

					<h4 class="modal-title w-100 font-weight-bold">Biodata Tamu</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body mx-3">
						<div class="md-form mb-2 ctamu0">
							<i class="fa fa-user prefix grey-text"></i><label>Nomor kartu pengenal dan jenis kelamin</label>
							<div class=" row col-sm" style="margin-bottom: 5px">
								<input type="ID" id="ID-tamu " name = "id0" class="form-control form-control-2 validate col-sm-9 idfield2" style=" margin-right: 5px" placeholder="Tempelkan ID pengenal" required readonly>
								<select type="ID"  name = "gen0"  class="form-control form-control-2  col-sm-2"  >
									<option value="L" >L</option>
							    <option value="P" >P</option>
								</select>
							</div>
						</div>
						
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Nama Lengkap</label>
							<input type="ID" id="nama " name = "Nama"  class="form-control form-control-2 validate " placeholder="Ketik Nama Lengkap anda">
						</div>
						
						<div class="md-form mb-2 date " data-provide="datepicker">
							<i class="fa fa-user prefix grey-text"></i><label>Tanggal Lahir</label>
						    <input type="text" id="tanggallhr"  class="form-control form-control-2 " style="width: 100%;padding: .5em .5em; margin: 0px " placeholder="Tanggal Lahir mm/dd/yyyy" >
						    <div class="input-group-addon">
						        <span class="glyphicon glyphicon-th"></span>
						    </div>
						</div>
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Nomor HP</label>
							<input type="ID" id="nohp " name = "id"  class="form-control form-control-2 validate " placeholder="Ketik Nomor HP anda">
						</div>	
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Kategori tamu</label>
							<select type="text" class="form-control form-control-2 validate "  name="tipe" id="tipe"  onchange="set_sub()" >
								<option>a</option>
			                    <option>b</option>
			                    
			                  
	              			</select>		
						</div>				
						
						<div class="modal-footer d-flex justify-content-center">
							<input type="button" name="" class="btn btn-primary backmb"  value="Kembali">
							<input type="button" name="" class="btn btn-primary nextmb"  value="Selanjutnya">
						</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="uidmodal2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">

					<h4 class="modal-title w-100 font-weight-bold">Laporan Kedatangan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body mx-3">
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Plat Nomor kendaraan</label>
							<input type="ID" id="plat nomor " name = "id"  class="form-control form-control-2 validate " placeholder="Ketik asal institusi anda">
						</div>
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Departemen</label>
							<select type="text"  class="form-control form-control-2" name="departemen" id="departemen" >
	            				<option>x</option>
				            	<option>z</option>
				            	
	        				</select>	
						</div>
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Bertemu Dengan</label>
							<input type="ID"  name = "id"  class="form-control form-control-2 validate " placeholder="Ketik Nama Yang Mengundang">
						</div>
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Keperluan</label>
							<input type="ID"  name = "id"  class="form-control form-control-2 validate " placeholder="Ketik Keperluan kedatangan">
						</div>


						<div class="modal-footer d-flex justify-content-center">
							<input type="button" name="" class="btn btn-primary backmb"  value="Kembali">
							<input type="button" name="" class="btn btn-primary nextmb"  value="Selanjutnya">
						</div>

				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="uidmodal3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">

					<h4 class="modal-title w-100 font-weight-bold">Laporan Kedatangan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body mx-3">
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Suhu</label>
							<input type="number" id="plat nomor " name = "id"  class="form-control form-control-2 validate " placeholder="Ketik Suhu badan anda">
						</div>
						<div class="md-form mb-2">
							<i class="fa fa-user prefix grey-text"></i><label>Kondisi Fisik</label>
							<select type="text"  class="form-control form-control-2 chkcon" name="Keadaan" id="keadaan" >
	            				<option selected>Sehat</option>
				            	<option>Sakit</option>
				            	
	        				</select>	
						</div>

						<div class="divsakit">
							<div class="md-form mb-2">
								<i class="fa fa-user prefix grey-text"></i><label>jenis sakit</label>
								<input type="number" id="plat nomor " name = "id"  class="form-control form-control-2 validate " placeholder="Ketik Suhu badan anda">
							</div>
						</div>
						


						<div class="modal-footer d-flex justify-content-center">
							<input type="button" name="" class="btn btn-primary backmb"  value="Back">
							<input type="button" name="" class="btn btn-primary nextmb"  value="Next">
						</div>

				</div>
			</div>
		</div>
	</div>
</form>
