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
								<h4 class="page-title">Data Jabatan dan Atasan</h4>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Jabatan</a></li>
									<li class="breadcrumb-item active">Jabatan dan Atasan</li>
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
										JABATAN
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
														<b>Rotasi Jabatan</b>
													</td>
													<td width="1%">
														<b>:</b>
													<td><button class="btn btn-warning"><i class="mdi mdi-account-settings"></i> ROTASI JABATAN</button></td>
													</td>
												</tr>
											</tbody>
										</table>
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