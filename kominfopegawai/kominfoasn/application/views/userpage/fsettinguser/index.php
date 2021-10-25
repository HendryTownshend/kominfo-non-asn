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
								<h4 class="page-title">Setting Profile</h4>
								<div class="row">
									<div class="col-lg-6">
										<?php echo $this->session->flashdata('message'); ?>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Setting</a></li>
									<li class="breadcrumb-item active">Setting Profile</li>
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

									<div class="table-responsive">
										<table class="table table-striped">
											<tbody>
												<tr>
													<td width="30%">
														<b>NIP Pegawai</b>
													</td>
													<td width="1%">
														<b>:</b>
													<td><?php echo $user_pengguna['nip']; ?></td>
													</td>
												</tr>
												<tr>
													<td width="30%">
														<b>Nama Pegawai</b>
													</td>
													<td width="1%">
														<b>:</b>
													<td><?php echo $user_pengguna['name']; ?></td>
													</td>
												</tr>
												<tr>
													<td width="30%">
														<b>Email</b>
													</td>
													<td width="1%">
														<b>:</b>
													</td>
													<td><?php echo $user_pengguna['email']; ?></td>
												</tr>
												<tr>
													<td width="30%">
														<b>Jabatan</b>
													</td>
													<td width="1%">
														<b>:</b>
													<td>Kepala Bidang Informasi dan Komunikasi Publik</td>
													</td>
												</tr>
												<tr>
													<td width="30%">
														<b>OPD/SKPD</b>
													</td>
													<td width="1%">
														<b>:</b>
													<td>DINAS KOMUNIKASI DAN INFORMATIKA</td>
													</td>
												</tr>
												<tr>
													<td width="30%">
														<b>Edit Data Diri</b>
													</td>
													<td width="1%">
														<b>:</b>
													<td><a class="btn btn-warning" href="<?php echo base_url(); ?>WelcomeUser/edit" role="button"><i class="mdi mdi-account-settings"></i>Edit Profile</a></td>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<small>
										<p class="text-center">Terdaftar pada <?php echo date('d F Y', $user_pengguna['date_created']); ?></p>
									</small>
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

			</>
			<!-- ============================================================== -->
			<!-- End Right content here -->
			<!-- ============================================================== -->

		</div>
		<!-- END wrapper -->

</body>