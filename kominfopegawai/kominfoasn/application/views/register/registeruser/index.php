<body>

	<!-- Begin page -->
	<div class="accountbg"></div>
	<div class="wrapper-page">
		<div class="card card-pages shadow-none">

			<div class="card-body">
				<div class="text-center m-t-0 m-b-15">
					<!-- <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a> -->
				</div>
				<h5 class="font-18 text-center">Register User</h5>

				<form class="form-horizontal m-t-30" method="POST" action="<?php echo base_url(); ?>AuthUser/registeruser">

					<div class="form-group">
						<div class="col-12">
							<label>Fullname</label>
							<input class="form-control" type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Full Name">
							<small class="text-danger"><?php echo form_error('name'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Email</label>
							<input class="form-control" type="text" id="email_user" name="email_user" value="<?php echo set_value('email_user'); ?>" placeholder="Email User">
							<small class="text-danger"><?php echo form_error('email_user'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Username</label>
							<input class="form-control" type="text" id="username_user" name="username_user" value="<?php echo set_value('username_user'); ?>" placeholder="Username">
							<small class="text-danger"><?php echo form_error('username_user'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Password</label>
							<input class="form-control" type="password" id="password3" name="password3" placeholder="Password">
							<small class="text-danger"><?php echo form_error('password3'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Repeat Password</label>
							<input class="form-control" type="password" id="password4" name="password4" placeholder="Repeat Password">
						</div>
					</div>

					<div class="form-group text-center m-t-20">
						<div class="col-12">
							<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
						</div>
					</div>

					<div class="form-group mb-0 row">
						<div class="col-12 m-t-10 text-center">
							<a href="<?php echo base_url(); ?>AuthUser" class="text-muted">Already have account?</a>
						</div>
					</div>

					<div class="form-group mb-0 row">
						<div class="col-12 m-t-10 text-center">
							<a href="#" class="text-muted">Forgot Password?</a>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
	<!-- END wrapper -->

</body>