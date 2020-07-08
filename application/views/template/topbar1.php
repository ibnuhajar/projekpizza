    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    	<!-- Main Content -->
    	<div id="content">

    		<!-- Topbar -->
    		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    			<!-- Sidebar Toggle (Topbar) -->
    			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    				<i class="fa fa-bars"></i>
    			</button>

    			<!-- Topbar Search -->
    			<div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search shadow">
    			</div>

    			<!-- Topbar Navbar -->
    			<ul class="navbar-nav ml-auto">

    				<!-- Nav Item - User Information -->
    				<li class="nav-item dropdown no-arrow">
    					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    						<span class="mr-2 d-none d-lg-inline text-secondary text-capitalize text-right font-weight-bold medium"><?= $user['username'];  ?></span>
    						<img class="img-profile rounded-circle" src="<?= base_url('vendor/img/default.png');  ?>">
    					</a>
    					<!-- Dropdown - User Information -->
    					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    						<!-- membuat halaman detail user -->
    						<a class="dropdown-item" href="<?= base_url('Auth/detail');?>/<?=$user['id']; ?>">
							
    							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
    							Profile
    						</a>
    						<div class="dropdown-divider"></div>
    						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
    							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    							Logout
    						</a>
    					</div>
    				</li>
    			</ul>
    		</nav>
    		<!-- End of Topbar -->
