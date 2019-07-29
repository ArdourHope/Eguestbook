<section class="menu cid-qYTT5UNcri" once="menu" id="menu2-r">
		<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="menu-logo">
				<div class="navbar-brand">
					<span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-4" href="#top">TIV Pandaan<br></a></span>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown ml-auto" data-app-modern-menu="true">
					<li>
						<a  href="" class="nav-link link text-primary display-4" data-toggle="modal" data-target="#tamuLoginForm"><i
						class="fa fa-fw fa-user"></i>Rombongan</a>
					</li>
				<?php if (check_login()){?>
					<li>
						<a  href="pelaporan/dashboard.php" class="nav-link link text-primary display-4"><i
						class="fa fa-fw fa-user"></i>Admin</a>
					</li>
				<?php } else {?>
					<li>
						<a  href="" class="nav-link link text-primary display-4" data-toggle="modal" data-target="#modalLoginForm"><i
						class="fa fa-fw fa-user"></i>Admin</a>
					</li>
				<?php }?>
					
				</ul>
			</div>
		</nav>

	</section>

	<!-- Modal Kantin/vendor -->
	<div class="modal fade entered" id="tamuLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">

					<h4 class="modal-title w-100 font-weight-bold">Masuk Tamu Rombongan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

					<div class="modal-body mx-3">
						<form method="POST" action='pelaporan/auth/login.php' >
							
						<div id="buildyourform">
							<div class="md-form mb-2 ctamu0">
								<i class="fa fa-user prefix grey-text"></i><label data-error="wrong" data-success="right" for="defaultForm-email">Penanggung jawab</label>
								<div class=" row col-sm" style="margin-bottom: 5px">
									<input type="ID" name = "id0" class="form-control form-control-2 validate col-sm-9 " style=" margin-right: 5px" placeholder="Tempelkan ID pengenal">
									<select type="ID"  name = "gen0"  class="form-control form-control-2  col-sm-2"  >
										<option value="L" >L</option>
								    <option value="P" >P</option>
									</select>
								</div>
								<input type="ID"  name = "nama"  class="form-control form-control-2 validate " placeholder="Nama Penanggung Jawab">
							</div>
							<div class="md-form mb-2 ctamu1">
								<i class="fa fa-user prefix grey-text"></i><label data-error="wrong" data-success="right" for="defaultForm-email">Tamu Tambahan 1</label>
								<div class=" row col-sm" style="margin-bottom: 5px">
									<input type="ID"  name = "id1" class="form-control form-control-2 validate col-sm-9" style=" margin-right: 5px" placeholder="Tempelkan ID pengenal">
									<select type="ID"  name = "gen1"  class="form-control form-control-2  col-sm-2"  >
										<option value="L" >L</option>
								    	<option value="P" >P</option>
									</select>
								</div>
								<input type="ID"  name = "nama"  class="form-control form-control-2 " placeholder="Nama Tamu Tambahan">
							</div>
						</div>			
						<div class="modal-footer d-flex justify-content-center">
							<button type="button" class="btn btn-primary" value="-" style="width: 15% ;background-color: #dc3545;"id="removed"><font color="white" >-</font></button>
							<button type="button" class="btn btn-primary" value="+" style="width: 15%" id="add">+</button>
							<button class="btn btn-primary" style="width: 50%">next</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal Admin -->
	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">

					<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body mx-3">
					<form method="POST" action='misc/auth/login.php' >
						<div class="md-form mb-2">
							<i class="fa fa-envelope prefix grey-text"></i><label data-error="wrong" data-success="right" for="defaultForm-email">Nama User</label>
							<input type="ID"  name = "id"  class="form-control form-control-2 validate" placeholder="Usernname">
						</div>

						<div class="md-form mb-2">
							<i class="fa fa-lock prefix grey-text"></i>
							<label data-error="wrong" data-success="right" for="defaultForm-pass">Kata sandi</label>
							<input type="password"  name="password" class="form-control form-control-2 validate" placeholder="Password">

						</div>
						<?php 
						if (isset($_GET['status'])){
						if($_GET['status']== 1)
						echo "Password atau username salah<br>";
						else
						echo "Anda harus login terlebih dahulu<br>";
						}
						?>
				
						<div class="modal-footer d-flex justify-content-center">
							<button class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>