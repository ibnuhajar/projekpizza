<div class="container pb-5 ">
	<!-- row -->
	<div class="row ">
		<!-- col -->
		<div class="col-md-6">
			<div class="card shadow">
				<!-- card -->
				<div class="card-header">
					Edit User
				</div>
				<div class="card-body">
					<!-- card body -->

					<div class="row ">
						<div class="col">

							<!-- form -->
							<form action="<?= base_url(); ?>ManageUser/update/<?= $pegawai['id']; ?>" method="post">
								<div class="form-row">
									<input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
									<div class="form-group col-md-6">
										<label for="nama">Nama</label>
										<input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama']; ?>">
										<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group col-md-6">
										<label for="username">Username</label>
										<input type="text" class="form-control" id="username" name="username" value="<?= $pegawai['username']; ?>">
										<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group">
									<label for="bagian">Bagian Bidang</label>
									<select class="form-control" id="bagian" name="bagian" aria-selected="<?= $pegawai['role']; ?>">
										<option>Admin</option>
										<option>Keuangan</option>
									</select>
									<?= form_error('bagian', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="text" class="form-control" id="password" name="password" value="<?= $pegawai['password']; ?>">
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="repassword">RePassword</label>
									<input type="text" class="form-control" id="repassword" name="repassword" value="<?= $pegawai['password']; ?>">
									<?= form_error('repassword', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="row">
									<div class="col-md-8">
										<a href="<?= base_url('ManageUser/index'); ?>" class="btn btn-light">Kembali</a>
										<button type="submit" class="btn btn-primary">Update</button>
									</div>
									<div class="col ml-4 pl-5">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
