<div class="container-fluid">
<!-- containe rfluid -->

			<!-- DataTales -->
			<div class="card shadow mb-4">
            <div class="card-header py-3">
            	<h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
            <div class="table-responsive">			
                <table class="table table-bordered"  width="100%" cellspacing="0">
                	<thead>
                    	<tr>
							<th>No</th>
							<th>Nip</th>
							<th>Nama</th>
							<th>Gaji</th>
							<th>Action</th>	
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
	</div>
	<!-- akhir container fluid -->
</div>
