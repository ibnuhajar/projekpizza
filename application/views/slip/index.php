	<!-- Begin Page Content -->
	<div class="container-fluid">
		<?= $this->session->flashdata('massage'); ?>
		<!-- section insert -->
		
		<!-- Modal -->
		<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content border-left-success">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">Form Data Kariawan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body ">

						<!-- section form modal -->
						<form method="post" action="<?= base_url('Slip/insert'); ?>">
							<div class="form-row">
								<!-- <input type="hidden" name="id" value=""> -->
								<div class="form-group col-md-6">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group col-md-6">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username">
									<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-row">
								<!-- <input type="hidden" name="id" value=""> -->
								<div class="form-group col-md-6">
									<label for="nip">NIP</label>
									<input type="text" class="form-control" id="nip" name="nip">
									<?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group col-md-6">
									<label for="golongan">Golongan</label>
									<input type="hidden" name="role" value="Pegawai">
									<input type="text" class="form-control" id="golongan" name="golongan">
									<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group">
								<label for="gaji">Gaji</label>
								<input type="number" class="form-control" id="gaji" name="gaji">
								<?= form_error('gaji', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="text" class="form-control" id="password" name="password">
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
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="text-white btn btn-primary">Save</button>
							</div>
						</form>

					</div>
				</div>
			</div>

		</div>
		<div class="container-fluid">

			<!-- DataTales -->
			<div class="card shadow mb-4 border-left-success">
				<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Slip Gaji</h6>
					<!-- Button trigger modal -->
					<button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success btn-icon-split shadow-sm" data-toggle="modal" data-target="#exampleModalCenter">
						<span class="icon text-white-50">
							<i class="fas fa-plus"></i>
						</span>
						<span class="text">
							Add Item
						</span>
					</button>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<!-- id="dataTable" -->
						<table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Nip</th>
									<th>Nama</th>
									<th>Golongan</th>
									<th>Gaji</th>
									<th>Username</th>
									<th>Password</th>
									<th>Action</th>
								</tr>
							</thead>
							<!-- <tfoot>
								<tr>
									<th>No</th>
									<th>Nip</th>
									<th>Nama</th>
									<th>Golongan</th>
									<th>Gaji</th>
									<th>Username</th>
									<th>Password</th>
									<th>Action</th>
								</tr>
							</tfoot> -->
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($karyawan as $k) : ?>
									<tr>
										<th scope="row"><?= $i; ?></th>
										<td><?= $k['nip']; ?></td>
										<td><?= $k['nama']; ?></td>
										<td><?= $k['golongan']; ?></td>
										<td>Rp.<?= $k['gaji']; ?></td>
										<td><?= $k['username']; ?></td>
										<td> <?= $k['password']; ?></td>
										<td>
											<a href="<?= base_url(); ?>Slip/detail/<?= $k['id']; ?>" class="badge badge-success">Detail</a>&nbsp; |&nbsp;
											<a href="<?= base_url(); ?>Slip/update/<?= $k['id']; ?>" class="badge badge-primary">Edit</a>&nbsp; |&nbsp;
											<a href="<?= base_url(); ?>Slip/delete/<?= $k['id']; ?>" class="badge badge-danger">Hapus</a>
										</td>
									</tr>
									<?php $i++; ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- End of Main Content -->
