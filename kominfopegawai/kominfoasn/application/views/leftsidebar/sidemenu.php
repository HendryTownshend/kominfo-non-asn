<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
	<div class="slimscroll-menu" id="remove-scroll">

		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="metismenu" id="side-menu">

				<!-- Query Menu -->
				<?php
				$role_id = $this->session->userdata('role_id');
				$queryMenu = "SELECT `user_menu`. `id`, `menu`
																				FROM `user_menu` JOIN `user_access_menu`
																						ON `user_menu`.`id` = `user_access_menu`.`menu_id`
																			WHERE `user_access_menu`.`role_id` = $role_id
																ORDER BY `user_access_menu`.`menu_id` ASC
																";
				$menu = $this->db->query($queryMenu)->result_array();
				?>

				<!-- End Query Menu -->

				<!-- LOOPING MENU DARI QUERY DI ATAS -->

				<?php foreach ($menu as $m) : ?>
					<li class="menu-title">
						<?php echo $m['menu']; ?>
					</li>

					<!-- SIAPKAN SUB-MENU SESUAI MENU-->
					<?php
					$menuId = $m['id'];
					$querySubMenu = "SELECT * 
																									FROM `user_sub_menu` JOIN `user_menu`
																											ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
																								WHERE `user_sub_menu`.`menu_id` = $menuId
																										AND `user_sub_menu`.`is_active` = 1 
																						";
					$subMenu = $this->db->query($querySubMenu)->result_array();
					?>

					<?php foreach ($subMenu as $sm) : ?>
						<li>
							<a href="<?php echo base_url($sm['url']); ?>" class="waves-effect">
								<i class="<?php echo $sm['icon']; ?>"></i> <span> <?php echo $sm['title']; ?> </span>
							</a>
						</li>
					<?php endforeach; ?>

				<?php endforeach; ?>

			</ul>
			<!-- Left Menu END -->

		</div>
		<!-- Sidebar END-->
		<div class="clearfix"></div>

	</div>
</div>
<!-- Left Sidebar End -->