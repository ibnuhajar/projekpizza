<!DOCTYPE html>
<html lang="en"><head><title><?= $judul ?></title>
</head><body>

	<div class="container">
		<div >
		<!-- class="card mb-3 border-left-success" -->
			<div >
			<!-- class="card-header text-center" -->
				Detail Pegawai
			</div>
			<!-- class="card-body" -->
			<div >
				<table>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?= $karyawan['nama'] ?></td>
					</tr>
					<tr>
						<td>Golongan</td>
						<td>:</td>
						<td><?= $karyawan['golongan'] ?></td>
					</tr>
					<tr>
						<td>Gaji </td>
						<td> : </td>
						<td>Rp. <?= $karyawan['gaji'] ?> </td>
					</tr>
					<tr>
						<td>Username </td>
						<td> : </td>
						<td> <?= $karyawan['username'] ?> </td>
					</tr>
					<tr>
						<td>Password <</td> <td> : </td>
						<td> <?= $karyawan['password'] ?></td>
					</tr>
					<tr>
						<td>Digital Signature </td>
						<td> : </td>
						<td></td>
					</tr>
				</table>
				<!-- class="card-text" -->
				<p >Silahkan lakukan proses Verifikasi segera , Terima kasih</p>
			</div>
			<!-- class="card-footer text-muted" -->
			<div >
				<?= date('d-m-Y H:i:s') ?>
			</div>


		</div>


</body></html>
