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
								<h4 class="page-title">Kegiatan Pegawai Harian</h4>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Kegiatan Pegawai</a></li>
									<li class="breadcrumb-item active">Kegiatan Pegawai Harian</li>
								</ol>
							</div>
						</div> <!-- end row -->
						<div class="row">
							<div class="col-sm-6">
								<?php if (validation_errors()) : ?>
									<div class="alert alert-danger" role="alert">
										<?php echo validation_errors(); ?>
									</div>
								<?php endif; ?>

								<?php echo $this->session->flashdata('message'); ?>

							</div>
							<div class="col-sm-6">

							</div>
						</div>
					</div>
					<!-- end page-title -->


					<div class="row">
						<div class="col-lg-12">
							<div class="card border-primary mb-3">
								<div class="card-header border border-primary border-bottom-0">
									<div class="row">
										<!-- Button trigger modal -->
										<div class="col-lg-5 col-md-5 col-12">
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#kegiatanModal"> <i class="mdi mdi-plus-circle"></i> TAMBAH KEGIATAN PEGAWAI HARIAN</button>
										</div>
										<!-- Modal -->
										<div class="modal fade" id="kegiatanModal" tabindex="-1" aria-labelledby="kegiatanModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-xl">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="kegiatanModalLabel">Input Data Kegiatan</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>

													<form action="<?php echo base_url('WelcomeUser/harian'); ?>" method="POST">
														<div class="modal-body">
															<div class="row">
																<div class="col-md-3">

																</div>
																<div class="col-md-9">

																</div>

																<div class="col-md-12">
																	<!-- <div class="form-group">
																		<label for="input-bulan-pengerjaan" class="control-label">
																			Kegiatan Harian
																			<span class="text-danger">*</span>
																		</label>
																		<div class="search_select_box">
																			<select name="input_kegiatan_harian" id="input_kegiatan_harian" data-live-search="true" class="form-control">
																				<option>Web Design</option>
																				<option>Web Developer</option>
																				<option>App Development</option>
																				<option>Digital Marketing</option>
																				<option>SEO</option>
																				<option>Social Media Marketing</option>
																			</select>
																		</div>
																	</div> -->
																	<div class="form-group">
																		<label for="input_kegiatan_harian" class="control-label">
																			Kegiatan
																			<span class="text-danger">*</span>
																		</label>
																		<input type="text" class="form-control" id="input_kegiatan_harian" name="input_kegiatan_harian" placeholder="Input Kegiatan Harian" required="required" autocomplete="off">
																	</div>
																</div>

																<div class="col-md-3">
																	<div class="form-group">
																		<label for="input_kuantitas" class="control-label">
																			Kuantitas
																			<span class="text-danger">*</span>
																		</label>
																		<div class="input-group">
																			<input type="number" value="1" min="1" class="form-control" id="input_kuantitas" name="input_kuantitas" placeholder="Masukkan Kuantitas">
																			<div class="input-group-append">
																				<span class="input-group-text" id="input-satuan">
																					Notulen/Laporan
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group">
																		<label for="input_tanggal_pengerjaan" class="control-label">
																			Tanggal kegiatan
																			<span class="text-danger">*</span>
																		</label>
																		<div>
																			<div class="input-group">
																				<input type="text" class="form-control" placeholder="yyyy-mm-dd" id="tgl4" name="input_tanggal_pengerjaan" required="required" autocomplete="off">
																				<div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
																			</div><!-- input-group -->
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group">
																		<label for="input_jam_pengerjaan" class="control-label">
																			Jam Mulai
																			<span class="text-danger">*</span>
																		</label>
																		<div class="input-group">
																			<div class="input-group-append" for="input_jam_pengerjaan">
																				<span class="input-group-text">
																					<i class="mdi mdi-alarm"></i>
																				</span>
																			</div>
																			<!-- <input type="text" required="required" name="" id="" value="" class="form-control input-jam" placeholder="Pilih jam mulai"> -->
																			<input class="form-control" type="time" value="13:45:00" id="input_jam_pengerjaan" name="input_jam_pengerjaan">
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group">
																		<label for="input_jam_pengerjaan" class="control-label">
																			Jam Selesai
																			<span class="text-danger">*</span>
																		</label>
																		<div class="input-group">
																			<div class="input-group-append" for="input_jam_pengerjaan">
																				<span class="input-group-text">
																					<i class="mdi mdi-alarm"></i>
																				</span>
																			</div>
																			<!-- <input type="text" required="required" name="" id="" value="" class="form-control input-jam" placeholder="Pilih jam mulai"> -->
																			<input class="form-control" type="time" value="13:45:00" id="input_jam_selesai" name="input_jam_selesai">
																		</div>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group">
																		<label>Keterangan</label>
																		<div>
																			<textarea class="form-control" rows="5" id="input_keterangan" name="input_keterangan" placeholder="Beri Keterangan" required="required" autocomplete="off"></textarea>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary">Submit</button>
														</div>
													</form>
												</div>
											</div>


										</div>
										<!-- End Modal -->

										<div class="col-lg-7 col-md-7 col-12">
											<div class="form-horizontal">
												<div class="form-group row">
													<label for="tanggal-kegiatan-pegawai-harian" class="col-sm-4 control-label text-left">
														<h5>Pilih Tanggal : </h5>
													</label>
													<div class="col-sm-8">
														<div class="form-group">
															<div class="input-group">
																<div class="input-group-append">
																	<span class="input-group-text" for="example-date-input">
																		<i class="mdi mdi-calendar">
																			<!-- ::before -->
																		</i>
																	</span>
																</div>
																<form action="<?php echo base_url(); ?>WelcomeUser/harian" method="POST">
																	<input type="text" class="form-control" value="2021-08-04" id="tgl5" name="keyword" autocomplete="off">
																	<input type="submit" name="submit" class="btn btn-success">
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="data-kegiatan-harian">
									<div class="card-header bg-primary text-center">
										<h4 class="text-white">
											<i class="mdi mdi-calendar-range">
												<!-- ::before -->
											</i>
											DATA KEGIATAN HARIAN
										</h4>
										<h5 class="text-white">
											<?php echo format_indo(date('Y-m-d')); ?>
											<!-- ini nanti dinamis -->
										</h5>
									</div>
									<div class="card-body border border-primary border-top-0">
										<!-- nanti buat text loading -->
										<div class="row">
											<div class="col-12">
												<div class="card m-b-30">
													<div class="card-body">

														<table id="datatable" class="table table-striped table-bordered dt-responsive dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0; width: 100%;" role="grid">
															<thead>
																<tr role="row">
																	<th width="1%" class="sorting_disabled" rowspan="1" colspan="1">No.</th>
																	<th class="sorting_disabled" rowspan="1" colspan="1">Kegiatan</th>
																	<th class="sorting_disabled" rowspan="1" colspan="1">Jam</th>
																	<th width="1%" class="sorting_disabled" rowspan="1" colspan="1">Kuantitas</th>
																	<th width="1%" class="sorting_disabled" rowspan="1" colspan="1">Status</th>
																	<th class="sorting_disabled" rowspan="1" colspan="1">Keterangan</th>
																	<th width="10%" class="sorting_disabled" rowspan="1" colspan="1">Aksi</th>
																</tr>
															</thead>

															<tbody>

																<?php $i = 1;
																foreach ($harian as $hr) : ?>
																	<tr role="row">
																		<td class="text-center dtr-control"><?php echo $i++ ?></td>
																		<td><?php echo $hr['kegiatan_harian']; ?></td>
																		<td><?php echo $hr['jam_mulai']; ?> - <?php echo $hr['jam_selesai']; ?></td>
																		<td align="center"><?php echo $hr['kuantitas']; ?></td>
																		<td align="center">
																			<span class="badge badge-success">Menunggu</span>
																		</td>
																		<td><?php echo $hr['keterangan']; ?></td>
																		<td align="center">
																			<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#EditKegiatanModal<?php echo $hr['id']; ?>"><i class="fa fa-edit"></i></button>
																			|
																			<a href="<?php echo base_url('WelcomeUser/hapus/') . $hr['id']; ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
																		</td>
																	</tr>
																<?php endforeach; ?>
															</tbody>
														</table>
														<div class="row">
															<div class="col-sm-12 col-md-5"></div>
															<div class="col-sm-12 col-md-7"></div>
														</div>
														<table class="table mt-5">
														</table>
													</div>
												</div>
											</div> <!-- end col -->
										</div> <!-- end row -->
									</div> <!-- end row -->
								</div>
							</div>
						</div>
					</div>
					<!-- Edit Modal -->
					<?php
					foreach ($harian as $hr) :  ?>
						<div class="modal fade" id="EditKegiatanModal<?php echo $hr['id']; ?>" tabindex="-1" aria-labelledby="EditKegiatanModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="EditKegiatanModalLabel">Edit Data Kegiatan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?php echo base_url('WelcomeUser/editkegiatan'); ?>" method="POST">
										<div class="modal-body">

											<div class="row">
												<div class="col-md-3">

												</div>
												<div class="col-md-9">

												</div>

												<div class="col-md-12">
													<!-- <div class="form-group">
																		<label for="input-bulan-pengerjaan" class="control-label">
																			Kegiatan Harian
																			<span class="text-danger">*</span>
																		</label>
																		<div class="search_select_box">
																			<select name="input_kegiatan_harian" id="input_kegiatan_harian" data-live-search="true" class="form-control">
																				<option>Web Design</option>
																				<option>Web Developer</option>
																				<option>App Development</option>
																				<option>Digital Marketing</option>
																				<option>SEO</option>
																				<option>Social Media Marketing</option>
																			</select>
																		</div>
																	</div> -->
													<input type="hidden" name="id" value="<?php echo $hr['id']; ?>">
													<div class="form-group">
														<label for="edit_kegiatan_harian" class="control-label">
															Kegiatan
															<span class="text-danger">*</span>
														</label>
														<input type="text" class="form-control" id="edit_kegiatan_harian" name="edit_kegiatan_harian" placeholder="edit Kegiatan Harian" required="required" value="<?php echo $hr['kegiatan_harian']; ?>" autocomplete="off">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label for="edit_kuantitas" class="control-label">
															Kuantitas
															<span class="text-danger">*</span>
														</label>
														<div class="input-group">
															<input type="number" min="1" class="form-control" id="edit_kuantitas" name="edit_kuantitas" placeholder="Masukkan Kuantitas" value="<?php echo $hr['kuantitas']; ?>">
															<div class="input-group-append">
																<span class="input-group-text" id="input-satuan">
																	Notulen/Laporan
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label for="edit_tanggal_pengerjaan" class="control-label">
															Tanggal kegiatan
															<span class="text-danger">*</span>
														</label>
														<div>
															<div class="input-group">
																<input type="text" class="form-control tgl11" placeholder="yyyy-mm-dd" name="edit_tanggal_pengerjaan" required="required" autocomplete="off" value="<?php echo $hr['tanggal_pengerjaan']; ?>">
																<div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
															</div><!-- input-group -->
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label for="edit_jam_pengerjaan" class="control-label">
															Jam Mulai
															<span class="text-danger">*</span>
														</label>
														<div class="input-group">
															<div class="input-group-append" for="edit_jam_pengerjaan">
																<span class="input-group-text">
																	<i class="mdi mdi-alarm"></i>
																</span>
															</div>
															<!-- <input type="text" required="required" name="" id="" value="" class="form-control input-jam" placeholder="Pilih jam mulai"> -->
															<input class="form-control" type="time" value="13:45:00" id="edit_jam_pengerjaan" name="edit_jam_pengerjaan" value="<?php echo $hr['jam_mulai']; ?>">
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label for="edit_jam_selesai" class="control-label">
															Jam Selesai
															<span class="text-danger">*</span>
														</label>
														<div class="input-group">
															<div class="input-group-append" for="edit_jam_selesai">
																<span class="input-group-text">
																	<i class="mdi mdi-alarm"></i>
																</span>
															</div>
															<!-- <input type="text" required="required" name="" id="" value="" class="form-control input-jam" placeholder="Pilih jam mulai"> -->
															<input class="form-control" type="time" value="13:45:00" id="edit_jam_selesai" name="edit_jam_selesai" value="<?php echo $hr['jam_selesai']; ?>">
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Keterangan</label>
														<div>
															<textarea class="form-control" rows="5" id="edit_keterangan" name="edit_keterangan" placeholder="Beri Keterangan" required="required"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>


						</div>
					<?php endforeach; ?>
					<!-- End Edit Modal -->
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

</body>