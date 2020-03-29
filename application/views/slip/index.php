	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- section insert -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Welcome</h1>

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
		
	

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle">Form Data Kariawan</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<di class="modal-body">

		<!-- section form modal -->
	<form action="" method="post">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label name="no" for="no">No</label>
			<input type="text" class="form-control" name="no" id="no" placeholder="Nomer">
		</div>
		
		<div class="form-group col-md-6">
			<label name="bagian" for="bagian">Bagian</label>
				<select name="bagian" id="bagian" class="form-control">
					<option selected>Superfasior</option>
					<option>Manager</option>
					<option>Marketing</option>
					<option>Sales</option>
					<option>Analys</option>
					<option>Programer</option>
				</select>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label name="nip" for="nip">Nip</label>
			<input type="text" class="form-control" name="nip" id="nip" placeholder="Nip">
		</div>
		<div class="form-group col-md-6">
			<label name="golongan" for="golongan">Golongan</label>
				<select name="golongan" id="golongan" class="form-control">
					<option selected>B1</option>
					<option>B2r</option>
					<option>B3</option>
					<option>B4</option>
					<option>B5</option>
					<option>B6</option>
				</select>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
		<label name="nama" for="nama">Nama</label>
		<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
		</div>
		<div class="form-group col-md-6">
		<label name="uang" for="uang">Rp.</label>
		<input type="text" class="form-control" name="uang" id="uang" placeholder="Rp.">
		</div>
	</div>
	<div class="form-group">
		<label for="gaji" name="gaji">Gaji untuk Bulanan</label>
		<input type="text" class="form-control" name="gaji" id="gaji" placeholder="Rp. ">
	</div>
	
	<!-- section potongan -->
		<h5 class="text-center">Potongan Potongan</h5>
	<hr class="sidebar-divider my-0">
	<div class="form-group mt-1">
		<label for="iuran" name="iuran">Iuran Kopri</label>
		<input type="text" class="form-control" name="iuran" id="iuran" placeholder="Rp. ">
	</div>
	<div class="form-group">
		<label for="simpan" name="simpan">Simpanan Koperasi / Bantuan Kemalangan</label>
		<input type="text" class="form-control" name="simpan" id="simpan" placeholder="Rp. ">
	</div>
	<div class="form-group">
		<label for="darma" name="darma">Dharma Wanita</label>
		<input type="text" class="form-control" name="darma" id="darma" placeholder="Rp. ">
	</div>
	<div class="form-group">
		<label for="asuransi" name="asuransi">Asuransi</label>
		<input type="text" class="form-control" name="asuransi" id="asuransi" placeholder="Rp. ">
	</div>
	<div class="form-group">
		<label for="bank" name="bank">Bank Ke</label>
		<input type="text" class="form-control" name="bank" id="bank" placeholder="Nomor ">
	</div>
	<div class="form-group">
		<label for="kpn" name="kpn">KPN Ke</label>
		<input type="text" class="form-control" name="kpn" id="kpn" placeholder="Nomor ">
	</div>
	<div class="form-group">
		<label for="potong" name="potong">Jumlah Potongan</label>
		<input type="text" class="form-control" name="potong" id="potong" placeholder="Rp. ">
	</div>
	<hr class="sidebar-divider my-2">

	<!-- sevtion keseluruhan -->
	<div class="form-group">
		<label for="seluruh" name="seluruh">Jumlah Penerimaan Bersih</label>
		<input type="text" class="form-control" name="seluruh" id="seluruh" placeholder="Nomor ">
	</div>

	<div class="form-group mr-sm-2 pr-2 mb-2">
    <label for="digital" name="digital">Digital Signatur</label>
    <input type="text" class="form-control" name="digatal" id="digital" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxx">
  </div>
  <button type="submit" class="btn btn-success mb-1">Enkripsi</button>
</form>
	

<!-- end form modal -->
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<a href="<?=base_url(); ?>" type="button" class="btn btn-success">Save</a>
		</div>
		</div>
	</div>
	</div>

	
	<div class="container-fluid">

			<!-- DataTales -->
			<div class="card shadow mb-4">
            <div class="card-header py-3">
            	<h6 class="m-0 font-weight-bold text-primary">Data Tables Karyawan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    	<tr>
							<th>No</th>
							<th>Nip</th>
							<th>Nama</th>
							<th>Gaji</th>
							<th>Action</th>	
                    	</tr>
                	</thead>
                	<tfoot>
                    	<tr>
							<th>No</th>
							<th>Nip</th>
							<th>Nama</th>
							<th>Gaji</th>
							<th>Action</th>
                		</tr>
                  </tfoot>
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

        </div>
        <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


