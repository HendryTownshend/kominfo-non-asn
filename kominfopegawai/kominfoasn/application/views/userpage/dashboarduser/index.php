<body>
	<!-- taruh di header-->

	<!-- Begin page -->
	<div id="wrapper">

		<!-- Top Bar Start -->

		<!-- Top Bar End -->

		<!-- ========== Left Sidebar Start ========== -->

		<!-- =====Left Sidebar END===== -->

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
								<h4 class="page-title">Dashboard</h4>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
						</div>
						<!-- END row align-item-center -->
					</div>
					<!-- END page-title -->

					<!-- --Card Pengumaman-- -->
					<!-- MULAI class row -->
					<div class="row">

						<div class="col-sm-6 col-xl-12">
							<div class="card text-white bg-primary mb-3" style="max-width: auto;">
								<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									<i class="mdi mdi-bullhorn mr-2"></i>
									<b class="">Pengumuman</b>
								</button>
								<div class="collapse" id="collapseExample">
									<div class="card-body bg-white">
										<p class="card-text text-dark">
											1. UNTUK KEAMANAN DATA DIWAJIBKAN MENGGANTI PASSWORD PADA MENU SETTING <br>
											2. DILARANG KERAS MENGHAPUS PERIODE SKP <br>
											3. PENGINPUTAN SKP PALING LAMBAT 1 MINGGU SEMENJAK MENDUDUKI JABATAN <br>
											<b>4. INPUT KEGIATAN HARIAN MAKS TANGGAL 1 BULAN BERIKUTNYA</b><br>
											<b>5. VERIFIKASI KEGIATAN HARIAN PNS MAKS TANGGAL 2 BULAN BERIKUTNYA</b>
										</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- SELESAI class row -->
					<!-- --Akhir Card Pengumaman-- -->

					<!-- --Card Selamat Datang-- -->
					<!-- MULAI class row -->
					<div class="row">

						<div class="col-12">
							<!-- MULAI col-12 -->
							<div class="card">
								<!-- MULAI class card -->
								<div class="card-header bg-primary text-center bg-img">
									<!-- MULAI class card-header -->
									<Img src="<?php echo base_url(); ?>assets/images/icons/icon-files-dashboard.png" style="width: 9rem;"></Img>
									<h3 class="text-white">SELAMAT DATANG</h3>
									<h5 class="text-white">DI E-KINERJA</h5>
									<h6 class="text-white">PEGAWAI PEMERINTAH KOTA SEMARANG</h6>
								</div> <!-- SELESAI card-header -->
								<div class="card-body border border-primary border-top-0">
									<!-- MULAI card body -->
									<div class="row">
										<!-- MULAI row -->
										<!-- col chart -->
										<div class="col-sm-6">
											<div class="card card-border card-primary">
												<div class="card-header border-primary text-center bg-transparent pb-0">
													<h4 class="text-primary">
														<i class="mdi mdi-chart-donut-variant"></i> POINT BULAN JULI 2021
													</h4>
												</div>

												<div class="card-body">
													<div id="DonautBulanIni" class="morris-charts" style=" max-height: auto">
														<div class="col-xl-12">
															<div class="card m-b-30">
																<div class="card-body">
																	<h4 class="mt-0 header-title mb-4">Donut Chart</h4>

																	<div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

																</div>
															</div>
														</div>
														<!-- end col -->
													</div>
												</div>
											</div>
										</div>
										<!-- col chart -->
										<div class="col-6">
											<div class="card card-border card-primary">
												<div class="card-header border-primary text-center bg-transparent pb-0">
													<h4 class="text-primary">
														<i class="mdi mdi-chart-donut-variant"></i> POINT BULAN JUNI 2021
													</h4>
												</div>

												<div class="card-body">
													<div id="DonautBulanLalu" class="morris-charts" style=" max-height: auto">
														<div class="col-xl-12">
															<div class="card m-b-30">
																<div class="card-body">
																	<h4 class="mt-0 header-title mb-4">Donut Chart</h4>

																	<div id="morris-donut-example" class="morris-charts morris-chart-height">
																	</div>

																</div>
															</div>
														</div>
														<!-- end col-xl-12 -->
													</div>
												</div>
											</div>
										</div>
										<!-- END col chart -->
									</div> <!-- SELESAI row -->
								</div> <!-- SELESAI class card-body -->
							</div> <!-- SELESAI class card -->
						</div> <!-- SELESAI col-12-->

					</div>
					<!-- SELESAI class row -->
					<!-- --Akhir Card Selamat Datang-- -->


					<div class="row">
						<div class="col-xl-8">
							<div class="card m-b-30">
								<div class="card-body">

									<h4 class="mt-0 header-title mb-4">Area Chart</h4>

									<div id="morris-area-example" class="morris-charts morris-chart-height"></div>

								</div>
							</div>
						</div>
						<!-- end col -->


					</div>
					<!-- end row -->

				</div>
				<!-- END container-fluid -->

			</div>
			<!-- END content -->

			<?php
			$this->load->view('copyright/copyright');
			?>

			</>
			<!-- ============================================================== -->
			<!-- End Right content here -->
			<!-- ============================================================== -->

		</div>
		<!-- END class wrapper -->

</body>
