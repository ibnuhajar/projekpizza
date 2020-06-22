<?php

var_dump('pegawai');
echo $pegawai['id'];
echo '/';
echo $pegawai['nama'];
echo '/';
echo $pegawai['username'];
echo '/';
echo $pegawai['role'];
echo '/';
echo $pegawai['password'];

?>
<div class="container-fluid">
	<!-- row -->
	<div class="row">

		<!-- colom -->
		<div class="col">

			<!-- isi -->
			<div class="card shadow p-3 mb-5 bg-light rounded">
				<div class="card-header">
				<h5 class="card-title text-primary">New User</h5>
				</div>
				<div class="card-body">
					<form action="<?= base_url(); ?>ManageUser/update/<?= $pegawai['id']; ?>" method="post">
						<input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama']; ?>">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							<!-- <small id="emailHelp" class="form-text text-muted">Masukan nama Anda </small> -->
						</div>
						<div class="form-group">
							<label for="bagian">Bagian Bidang</label>
							<input type="text" class="form-control" id="bagian" name="bagian" value="<?= $pegawai['username']; ?>">
							<?= form_error('bagian', '<small class="text-danger pl-3">', '</small>'); ?>
							<!-- <small id="emailHelp" class="form-text text-muted">Masukan username Anda</small> -->
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" name="username" value="<?= $pegawai['role']; ?>">
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
							<!-- <small id="emailHelp" class="form-text text-muted">Masukan username Anda </small> -->
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" class="form-control" id="password" name="password" value="<?= $pegawai['password']; ?>">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="repassword">RePassword</label>
							<input type="text" class="form-control" id="repassword" name="repassword" value="<?= $pegawai['password']; ?>">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
				</div>
				<button type="submit" class="text-white btn btn-primary">Save</button>
				</form>
			</div>
		</div>

	</div>
</div>
</div>
