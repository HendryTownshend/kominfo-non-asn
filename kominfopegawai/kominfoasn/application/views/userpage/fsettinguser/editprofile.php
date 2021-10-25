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
								<h4 class="page-title">Edit Profile</h4>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Setting</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Setting Profile</a></li>
									<li class="breadcrumb-item active">Edit Profile</li>
								</ol>
							</div>
						</div> <!-- end row -->
					</div>
					<!-- end page-title -->

					<div class="row">
						<div class="col-lg-6">
							<div class="card ">
								<div class="card-header bg-primary text-center">
									<h4 class="text-white">
										<i class="mdi mdi-account-card-details"></i>
										PROFILE
									</h4>
								</div>
								<div class="card-body border border-primary border-top-0">

									<?php echo form_open_multipart('WelcomeUser/edit'); ?>
									<div class="form-group row">
										<label for="email" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="email" name="email" value="<?php echo $user_pengguna['email']; ?>" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="name" name="name" value="<?php echo $user_pengguna['name']; ?>">
											<?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Picture</label>
										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-3">
													<img src="<?php echo base_url('assets/images/users/') . $user_pengguna['image']; ?>" class="img-thumbnail">
												</div>
												<div class="col-sm-9">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="image" name="image">
														<label class="custom-file-label" for="image">Choose file</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row justify-content-end">
										<div class="col-sm-9">
											<button class="btn btn-primary" type="submit">Edit</button>
										</div>
									</div>

								</div>
							</div>
						</div> <!-- end col -->


					</div> <!-- end row -->






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

</body>