<div class="container-fluid">
	<div class="row">

		<div class="col-auto">

			<div class="card mb-3 shadow">
				<div class="card-header">
					Update Pegawai
				</div>
				<div class="card-body">

					<form method="post" action="<?= base_url('Slip/update'); ?>/<?= $karyawan['id']; ?>">
						<div class="form-row">
							<input type="hidden" name="id" value="<?=$karyawan['id'];  ?>">
							<div class="form-group col-md-6">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" value="<?=$karyawan['nama'];  ?>">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group col-md-6">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" value="<?=$karyawan['username'];  ?>">
								<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<div class="form-row">
							<!-- <input type="hidden" name="id" value=""> -->
							<div class="form-group col-md-6">
								<label for="nip">NIP</label>
								<input type="text" class="form-control" id="nip" name="nip" value="<?=$karyawan['nip'];  ?>">
								<?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group col-md-6">
								<label for="golongan">Golongan</label>
								<input type="hidden" name="role" value="Pegawai">
								<input type="text" class="form-control" id="golongan" name="golongan" value="<?=$karyawan['golongan'];  ?>">
								<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="gaji">Gaji</label>
							<input type="number" class="form-control" id="gaji" name="gaji" value="<?=$karyawan['gaji'];  ?>">
							<?= form_error('gaji', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" class="form-control" id="password" name="password" value="<?=$karyawan['password'];  ?>">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<!-- <div class="form-group"> -->
						<!-- <label for="validate">Kode Validasi Gaji</label> -->
						<!-- <div class="form-row"> -->
						<!-- <input type="hidden" name="id" value=""> -->
						<!-- <div class="form-group col-auto form-inline "> -->
						<!-- <input type="text" class="form-control mr-sm-2" id="validate" name="validate" value=""> -->
						<!-- <a id="tombol" class="btn btn-primary" href="">Generate</a> -->
						<!--  -->
						<!-- </div> -->
						<!-- </div> -->
						<!-- </div> -->

						<!--end form modal -->
						<div class="card-footer">
							<a href="<?= base_url('Slip') ?>" class="btn btn-secondary">Close</a>
							<button type="submit" class="text-white btn btn-primary">Save</button>
						</div>
					</form>



				</div>
			</div>





		</div>
	</div>






</div>
