<body>

	<!-- Begin page -->
	<div class="accountbg"></div>
	<div class="wrapper-page">
		<div class="card card-pages shadow-none">

			<div class="card-body">
				<div class="text-center m-t-0 m-b-15">
					<a href="#" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets/images/logo-ekinerja-4.png" alt="" height="24"></a>
				</div>
				<h5 class="font-18 text-center">Sign in sebagai admin</h5>

				<?php echo $this->session->flashdata('message'); ?>

				<form class="form-horizontal m-t-30" action="<?php echo base_url(); ?>WelcomeUser/index">

					<div class="user-thumb text-center m-b-30">
						<img src="<?php echo base_url(); ?>assets/images/users/user-administrator.png" class="rounded-circle thumb-lg img-thumbnail mx-auto d-block img-fluid" alt="thumbnail">
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Email</label>
							<input class="form-control" type="text" required="" placeholder="Email" id="email_admin" name="email_admin">
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Password</label>
							<input class="form-control" type="password" required="" placeholder="Password" id="password_admin" name="password_admin">
						</div>
					</div>


					<div class="form-group text-center m-t-20">
						<div class="col-12">
							<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
							<a class="btn btn-warning btn-block btn-lg waves-effect waves-light" type="submit" href="<?php echo base_url(); ?>AuthUser/registeruser">Buat akun user</a>
						</div>
					</div>

					<div class="form-group row m-t-30 m-b-0">
						<div class="col-sm-7">
							<!-- <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a> -->
						</div>
						<div class="col-sm-5 text-right">
							<!-- <a href="pages-register.html" class="text-muted">Create an account</a> -->
						</div>
					</div>

					<div class="form-group row m-t-30 m-b-0">
						<div class="col-sm-7">
							<a href="#" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
						</div>
						<div class="col-sm-5 text-right">
							<a href="<?php echo base_url(); ?>AuthAdmin/registeradmin" class="text-muted">Create an account</a>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
	<!-- END wrapper -->

</body>