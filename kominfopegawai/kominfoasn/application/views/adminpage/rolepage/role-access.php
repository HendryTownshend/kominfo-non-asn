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
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">E-Kinerja</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Role</a></li>
                                <li class="breadcrumb-item active">Role Access</li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div>
                <!-- end page-title -->



                <div class="row">
                    <div class="col-lg-6">

                        <?php echo $this->session->flashdata('message'); ?>

                        <h5 class="page-title"><?php echo $role['role']; ?></h5>

                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">TABEL ROLE</h4>
                                <p class="sub-title">

                                </p>

                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Menu</th>
                                                <th>Access</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($menu as $m) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i; ?></th>
                                                    <td><?php echo $m['menu']; ?></td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="changeRole" type="checkbox" <?php echo check_access($role['id'], $m['id']); ?> data-role="<?php echo $role['id']; ?>" data-menu="<?php echo $m['id']; ?>">
                                                        </div>
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




</div>
<!-- END wrapper -->

<!-- jQuery  -->


<!-- App js -->