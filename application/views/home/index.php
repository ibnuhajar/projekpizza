        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
		  <div class="jumbotron">
			<h1 class="display-4">Welcome </h1>
			<table class="table table-success">
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
 <?php foreach ($a as $a):?>
	<tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>

 <?php endforeach ?> 
  
    
  </tbody>
</table>
		</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


