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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Role</a></li>
                                    <li class="breadcrumb-item active">Role</li>
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

                                    <h4 class="mt-0 header-title">TABEL ROLE</h4>
                                    <p class="sub-title">

                                    </p>

                                    <a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>

                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1 ?>
                                                <?php foreach ($role as $r) : ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><?php echo $r['role']; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('WelcomeAdmin/roleaccess/') . $r['id']; ?>" class="btn btn-warning btn-sm waves-effect waves-light">Access</a>
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
        <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url(); ?>WelcomeAdmin/role" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
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