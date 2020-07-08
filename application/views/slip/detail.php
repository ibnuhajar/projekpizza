<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card mb-3 border-left-success">
				<div class="card-header text-center">
					Detail Pegawai
				</div>
				<div class="card-body">
					<table>
						<th>
							DetaiL Pegawai
						</th>
						<tr>
							<td>
								<h5 class="card-title">Nama</h5>
							</td>
							<td>
								<h5> : </h5>
							</td>
							<td>
								<h5> <?= $karyawan['nama'] ?> </h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="card-title">Golongan </h5>
							</td>
							<td>
								<h5> : </h5>
							</td>
							<td>
								<h5> <?= $karyawan['golongan'] ?> </h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="card-title">Gaji </h5>
							</td>
							<td>
								<h5> : </h5>
							</td>
							<td>
								<h5>Rp. <?= $karyawan['gaji'] ?> </h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="card-title">Username </h5>
							</td>
							<td>
								<h5> : </h5>
							</td>
							<td>
								<h5> <?= $karyawan['username'] ?> </h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="card-title">Password </h5>
							</td>
							<td>
								<h5> : </h5>
							</td>
							<td>
								<h5> <?= $karyawan['password'] ?> </h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="card-title">Digital Signature </h5>
							</td>
							<td>
								<h5> : </h5>
							</td>
							<td>
								<h5></h5>
							</td>
						</tr>
					</table>
					<p class="card-text">Silahkan lakukan proses Verifikasi segera , Terima kasih.</p>
					<a href="<?= base_url('Slip')  ?>" class="btn btn-secondary btn-sm">
						<span class="text">Kembali</span>
					</a>
					<a href="<?= base_url('Slip/print');  ?>/<?= $karyawan['id'] ?>"  class="btn btn-primary btn-icon-split btn-sm" onclick="">
						<span class="icon text-white-50">
							<i class="fas fa-print"></i>
						</span>
						<span class="text">Print</span>
					</a>
				</div>
				<div class="card-footer text-muted">
					<?= date('d-m-Y H:i:s') ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
