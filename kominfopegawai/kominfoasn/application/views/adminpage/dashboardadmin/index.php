<body>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- Top Bar Start -->

		<!-- Top Bar End -->

		<!-- ========== Left Sidebar Start ========== -->

		<!-- Left Sidebar End -->

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">
					<div class="page-title-box">
						<div class="row align-items-center">
							<div class="col-sm-6">
								<h4 class="page-title"><?php echo $title; ?></h4>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</E-Kinerja></a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
									<li class="breadcrumb-item active">Dashboard Admin</li>
								</ol>
							</div>
						</div> <!-- end row -->
					</div>
					<!-- end page-title -->
					<div class="row">
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-heading p-4">
									<div class="mini-stat-icon float-right">
										<i class="mdi mdi-spin mdi-star-outline bg-primary  text-white"></i>
									</div>
									<div>
										<h5 class="font-16">User Activation</h5>
									</div>
									<h3 class="mt-4"><?php echo count_user_activation(); ?></h3>
									<!-- <div class="progress mt-4" style="height: 4px;">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> -->
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-heading p-4">
									<div class="mini-stat-icon float-right">
										<i class="fas fa-users bg-success text-white"></i>
									</div>
									<div>
										<h5 class="font-16">Total User</h5>
									</div>
									<h3 class="mt-4"><?php echo count_user(); ?></h3>
									<!-- <div class="progress mt-4" style="height: 4px;">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span>
									</p> -->
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-heading p-4">
									<div class="mini-stat-icon float-right">
										<i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
									</div>
									<div>
										<h5 class="font-16">Total Kegiatan</h5>
									</div>
									<h3 class="mt-4"><?php echo count_item(); ?></h3>
									<!-- <div class="progress mt-4" style="height: 4px;"> -->
									<!-- <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div> -->
									<!-- </div> -->
									<!-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span> -->
									<!-- </p> -->
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- container-fluid -->

			</div>
			<!-- content -->

			<?php
			$this->load->view('copyright/copyright');
			?>

		</div>
		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->

	</div>
	<!-- END wrapper -->

	<!-- jQuery  -->


	<!-- App js -->


</body>