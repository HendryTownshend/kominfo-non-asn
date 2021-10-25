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
									<li class="breadcrumb-item"><a href="javascript:void(0);">Submenu Management</a></li>
									<li class="breadcrumb-item active">Submenu Management</li>
								</ol>
							</div>
						</div> <!-- end row -->
					</div>
					<!-- end page-title -->



					<div class="row">
						<div class="col-lg">
							<?php if (validation_errors()) : ?>
								<div class="alert alert-danger" role="alert">
									<?php echo validation_errors(); ?>
								</div>
							<?php endif; ?>

							<?php echo $this->session->flashdata('message'); ?>

							<div class="card m-b-30">
								<div class="card-body">

									<h4 class="mt-0 header-title">TABEL SUBMENU MANAGEMENT</h4>
									<p class="sub-title">

									</p>

									<a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New SubMenu</a>

									<div class="table-responsive">
										<table class="table table-hover mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Title</th>
													<th>Menu</th>
													<th>Url</th>
													<th>Icon</th>
													<th>Active</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i = 1 ?>
												<?php foreach ($subMenu as $sm) : ?>
													<tr>
														<th scope="row"><?php echo $i; ?></th>
														<td><?php echo $sm['title']; ?></td>
														<td><?php echo $sm['menu']; ?></td> <!-- sekarang berubah menjadi 'menu'-->
														<td><?php echo $sm['url']; ?></td>
														<td><?php echo $sm['icon']; ?></td>
														<td><?php echo $sm['is_active']; ?></td>
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
		<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url(); ?>Menu/submenu" method="POST">
						<div class="modal-body">
							<div class="form-group">
								<input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu title">
							</div>
							<div class="form-group">
								<select name="menu_id" id="menu_id" class="form-control">
									<!-- kita ngambil data menunya -->
									<option value="">Select Menu</option>
									<?php foreach ($menu as $m) : ?>
										<option value="<?php echo $m['id']; ?>"><?php echo $m['menu']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu Url">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu Icon">
							</div>
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
									<label class="form-check-label" for="is_active">
										Active?
									</label>
								</div>
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
