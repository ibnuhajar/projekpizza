	<!-- Begin Page Content -->
	<div class="container-fluid">
	<h1 class="display-4">Welcome </h1>
	<!-- Page Heading -->
	<div class="jumbotron bg-white">

	<!-- section insert -->
	
	<a href="<?=base_url(); ?>/Slip/insert" class="badge badge-success">
	Add Item
	</a>


		<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
			<th scope="col">NO</th>
			<th scope="col">Nip</th>
			<th scope="col">Nama</th>
			<th scope="col">Gaji</th>
			<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; ?>
		<?php foreach ($karyawan as $k):?>
			<tr>
			<th scope="row"><?= $i; ?></th>
			<td><?= $k['nip']; ?></td>
			<td><?= $k['nama']; ?></td>
			<td>Rp.<?= $k['rp']; ?></td>
			<td>
				<a href="#" class="badge badge-primary ">Edit</a>&nbsp; |&nbsp;
				<a href="<?=base_url(); ?>/Slip/delete/<?= $k['no']; ?>" class="badge badge-danger">Hapus</a>
			</td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?> 
		</tbody>
		</table>

	</div>
	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


