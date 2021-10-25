<!-- Begin page -->

<!-- Top Bar Start -->
<div class="topbar">

	<!-- LOGO -->
	<div class="topbar-left">
		<a href="<?php echo base_url(); ?>WelcomeUser" class="logo">
			<span class="logo-light">
				<i class="mdi mdi-camera-control"></i> E-Kinerja
			</span>
			<span class="logo-sm">
				<i class="mdi mdi-camera-control"></i>
			</span>
		</a>
	</div>
	<!-- END LOGO -->

	<!-- MULAI class Navbar -->
	<nav class="navbar-custom">
		<ul class="navbar-right list-inline float-right mb-0">

			<li class="list-inline-item">
				<p><?php echo $user_pengguna['name']; ?></p> <!-- mengambil data menggunakan session -->
			</li>
			<li class="dropdown notification-list list-inline-item">
				<div class="dropdown notification-list nav-pro-img">
					<a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<img src="<?php echo base_url('assets/images/users/') . $user_pengguna['image']; ?>" alt="user" class="rounded-circle">
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<!-- item-->
						<a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
						<a class="dropdown-item d-block" href="<?php echo base_url(); ?>WelcomeUser/setting"><i class="mdi mdi-settings"></i> Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item text-danger" href="<?php echo base_url(); ?>AuthUser/logout"><i class="mdi mdi-power text-danger"></i> Logout</a>
					</div>
				</div>
			</li>

		</ul>
	</nav>
	<!-- SELESAI class Navbar -->
</div>