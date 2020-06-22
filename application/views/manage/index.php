<div class="container-fluid">
	<!-- containe rfluid -->
	<?= $this->session->flashdata('massage'); ?>
	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Users</h6>
				</div>

				<div class="col">
					<!-- Button trigger modal -->
					<button type="button" class="mr-2 d-none d-lg-inline btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						<span class="icon text-white-50">
							<i class="fas fa-plus"></i>
						</span>
						<span class="text">
							New User
						</span>
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">New User</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">

									<!-- form insert -->
									<form action="<?= base_url('ManageUser/insert'); ?>" method="post">
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" class="form-control" id="nama" name="nama">
											<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
											<!-- <small id="emailHelp" class="form-text text-muted">Masukan nama Anda </small> -->
										</div>
										<div class="form-group">
											<label for="bagian">Bagian Bidang</label>
											<input type="text" class="form-control" id="bagian" name="bagian">
											<?= form_error('bagian', '<small class="text-danger pl-3">', '</small>'); ?>
											<!-- <small id="emailHelp" class="form-text text-muted">Masukan username Anda</small> -->
										</div>
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" class="form-control" id="username" name="username">
											<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
											<!-- <small id="emailHelp" class="form-text text-muted">Masukan username Anda </small> -->
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" name="password">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="repassword">RePassword</label>
											<input type="password" class="form-control" id="repassword" name="repassword">
											<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="text-white btn btn-primary">Save</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Bagian</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($pegawai as $k) : ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $k['username']; ?></td>
								<td><?= $k['nama']; ?></td>
								<td><?= $k['role']; ?></td>

								<td>
									<a href="#" class="badge badge-primary ">Detail</a>&nbsp; |&nbsp;
									<a href="<?= base_url(); ?>ManageUser/update/<?= $k['id']; ?>" class=" badge badge-warning ">Edit</a>&nbsp; |&nbsp;
									<a href="<?= base_url(); ?>ManageUser/delete/<?= $k['id']; ?>" class="badge badge-danger">Hapus</a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- akhir container fluid -->
</div>
