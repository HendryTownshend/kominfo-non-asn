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
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ganti Password</a></li>
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
                                        GANTI PASSWORD
                                    </h4>
                                </div>
                                <div class="card-body border border-primary border-top-0">

                                    <form action="<?php echo base_url(); ?>WelcomeUser/changePassword" method="POST">
                                        <div class="form-group row">
                                            <label for="current_password" class="col-sm-3 col-form-label">Password Lama</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="current_password" name="current_password">
                                                <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="new_password1" class="col-sm-3 col-form-label">Password Baru</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                                <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="new_password2" class="col-sm-3 col-form-label">Ulangi Password Baru</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                                <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-primary" type="submit">Ubah Password</button>
                                            </div>
                                        </div>
                                    </form>

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