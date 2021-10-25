<body>

	<!-- Begin page -->
	<div class="accountbg"></div>
	<div class="wrapper-page">
		<div class="card card-pages shadow-none">

			<div class="card-body">
				<div class="text-center m-t-0 m-b-15">
					<!-- <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a> -->
				</div>
				<h5 class="font-18 text-center">Register Admin</h5>

				<form class="form-horizontal m-t-30" method="POST" action="<?php echo base_url(); ?>AuthAdmin/registeradmin">

					<div class="form-group">
						<div class="col-12">
							<label>Email</label>
							<input class="form-control" type="text" placeholder="Email" id="email_admin" name="email_admin" value="<?php echo set_value('email_admin'); ?>">
							<small class="text-danger"><?php echo form_error('email_admin'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Username</label>
							<input class="form-control" type="text" placeholder="Username" id="username_admin" name="username_admin" value="<?php echo set_value('username_admin'); ?>">
							<small class="text-danger"><?php echo form_error('username_admin'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Password</label>
							<input class="form-control" type="password" placeholder="Password" id="password1" name="password1">
							<small class="text-danger"><?php echo form_error('password1'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Repeat Password</label>
							<input class="form-control" type="password" placeholder="Password" id="password2" name="password2">
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
							</div>
						</div>
					</div>

					<div class="form-group text-center m-t-20">
						<div class="col-12">
							<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
						</div>
					</div>

					<div class="form-group mb-0 row">
						<div class="col-12 m-t-10 text-center">
							<a href="<?php echo base_url(); ?>AuthAdmin" class="text-muted">Already have account?</a>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
	<!-- END wrapper -->

</body>