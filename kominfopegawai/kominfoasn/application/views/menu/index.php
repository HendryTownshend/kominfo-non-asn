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
								<h4 class="page-title"><?php echo $title ?></h4>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Menu Management</a></li>
									<li class="breadcrumb-item active">Menu Management</li>
								</ol>
							</div>
						</div> <!-- end row -->
					</div>
					<!-- end page-title -->



					<div class="row">
						<div class="col-lg-6">
							<?php echo form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

							<?php echo $this->session->flashdata('message'); ?>

							<div class="card m-b-30">
								<div class="card-body">

									<h4 class="mt-0 header-title">TABEL MENU MANAGEMENT</h4>
									<p class="sub-title">

									</p>

									<a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>

									<div class="table-responsive">
										<table class="table table-hover mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Menu</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i = 1 ?>
												<?php foreach ($menu as $m) : ?>
													<tr>
														<th scope="row"><?php echo $i; ?></th>
														<td><?php echo $m['menu']; ?></td>
														<td>
															<a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Edit</a>
															<a href="#" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
														</td>
													</tr>
													<?php $i++ ?>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
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


		<!-- Modal -->
		<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url(); ?>Menu" method="POST">
						<div class="modal-body">
							<div class="form-group">
								<input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Modal -->

	</div>
	<!-- END wrapper -->

	<!-- jQuery  -->


	<!-- App js -->


</body>
