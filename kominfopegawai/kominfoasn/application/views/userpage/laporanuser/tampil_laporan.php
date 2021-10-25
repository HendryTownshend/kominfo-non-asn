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
                                <h4 class="page-title">Laporan Bulanan</h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Laporan</a></li>
                                    <li class="breadcrumb-item active">Laporan Bulanan</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                        <div class="row mt-3">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-right mr-3" data-toggle="modal" data-target="#printRentangTanggal">
                                    <i class="fa fa-print"> Print Rentang Tanggal</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-primary mb-3">
                                <div class="card-header border border-primary border-bottom-0">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-12">
                                            <div class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="tanggal-kegiatan-pegawai-harian" class="col-sm-4 control-label text-left">
                                                        <h5>Pilih Bulan : </h5>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" for="vtanggal">
                                                                        <i class="mdi mdi-calendar">
                                                                            <!-- ::before -->
                                                                        </i>
                                                                    </span>
                                                                </div>
                                                                <!-- <input type="text" id="tanggal-kegiatan-pegawai-harian" class="form-control form-control-lg tanggal-kegiatan-pegawai-harian" placeholder="Pilih Tanggal"> -->
                                                                <form action="<?php echo base_url(); ?>WelcomeUser/bulanan" method="POST">
                                                                    <div class="input-group ">
                                                                        <input type="month" name="vtanggal" value="2021-08" class="form-control" required />
                                                                        <input type="submit" name="submit" class="btn btn-success"></input>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-12">

                                        </div>
                                    </div>
                                </div>

                                <div id="data-kegiatan-harian">
                                    <div class="card-header bg-primary text-center">
                                        <h4 class="text-white">
                                            <i class="mdi mdi-calendar-range">
                                                <!-- ::before -->
                                            </i>
                                            DATA KEGIATAN BULAN
                                        </h4>
                                        <h5 class="text-white">
                                            <b><?php echo date('F Y') ?></b>
                                            <!-- ini nanti dinamis -->
                                        </h5>
                                    </div>
                                    <div class="card-body border border-primary border-top-0">
                                        <!-- nanti buat text loading -->
                                        <div id="tampil_laporan" class="row">
                                            <div class="col-12">
                                                <div class="card m-b-30">
                                                    <div class="card-body">

                                                        <table id="datatable" class="table table-striped table-bordered dt-responsive dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0; width: 100%;" role="grid">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th width="1%" class="sorting_disabled" rowspan="1" colspan="1">No.</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Tanggal</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Jam</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Kegiatan</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Keterangan</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Status</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($bulanan as $bln) : ?>
                                                                    <tr role="row">
                                                                        <td class="text-center dtr-control"><?php echo $i++ ?></td>
                                                                        <td><?php echo date('d F Y', strtotime($bln['tanggal_pengerjaan'])); ?></td>
                                                                        <td><?php echo $bln['jam_mulai']; ?> - <?php echo $bln['jam_selesai']; ?></td>
                                                                        <td align="center"><?php echo $bln['kegiatan_harian']; ?></td>
                                                                        <td><?php echo $bln['keterangan']; ?></td>
                                                                        <td align="center">
                                                                            <span class="badge badge-success">Menunggu</span>
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
                </div>

                <!-- Modal -->
                <div class="modal fade" id="printRentangTanggal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="printRentangTanggalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="printRentangTanggalLabel">Pilih Rentang Tanggal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url('WelcomeUser/exportpdf/pdf'); ?>" method="POST" target="_blank">
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="form-group">Dari Tanggal</div>
                                            </td>
                                            <td align="center" width="5%">
                                                <div class="form-group">:</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="tgl_a" id="tgl8" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">Sampai Tanggal</div>
                                            </td>
                                            <td align="center">
                                                <div class="form-group">:</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="tgl_b" id="tgl9" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <br>
                                        <td>
                                        </td>
                                    </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" name="cetak_rentang_laporan" class="btn btn-outline-primary" value="Cetak">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

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