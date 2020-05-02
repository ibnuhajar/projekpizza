	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="row">
						<div class="col-lg">
							<div class="card-body p-0">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">PLEASE LOGIN</h1>
									</div>
									<?= $this->session->flashdata('massage'); ?>
									<form class="user" method="post" action="<?=base_url('Auth/login'); ?>">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" name="username" id="username"  placeholder="Masuk kan username..." value="<?= set_value('username');?>">
											<?= form_error('username','<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
											<?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<hr>
										<button type="submit" class="btn btn-success btn-user btn-block">
											Login
										</button>
										<center class=" pt-2">
											<a href="index.html" >
												Kembali
											</a>
										</center>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
