<!-- jQuery  -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/metismenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- Required datatable js -->
<script src="<?php echo base_url(); ?>../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Buttons examples -->
<script src="<?php echo base_url(); ?>../plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url(); ?>../plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url(); ?>assets/pages/datatables.init.js"></script>

<!--Morris Chart-->
<script src="<?php echo base_url(); ?>../plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/raphael/raphael.min.js"></script>

<script src="<?php echo base_url(); ?>assets/pages/dashboard.init.js"></script>

<!-- Datetimepicker js -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/moment-with-locales.js"></script>

<!-- Datepicker js -->
<script src="<?php echo base_url(); ?>../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="<?php echo base_url(); ?>../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
<!-- Plugins Init js -->
<script src="<?php echo base_url(); ?>assets/pages/form-advanced.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

<!-- Sweet-Alert  -->
<script src="<?php echo base_url(); ?>../plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/pages/sweet-alert.init.js"></script>

<script>
	$(function() {
		var dtToday = new Date();
		var month = dtToday.getMonth() + 1;
		var day = dtToday.getDate();
		var year = dtToday.getFullYear();
		if (month < 0)
			month = '0' + month.toString();
		if (day < 10)
			day = '0' + day.toString();
		var maxDate = year + '-' + month + '-' + day;
		$('#txtDate').attr('max', maxDate);
	})

	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});

	$('.form-check-input').on('click', function() {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');

		$.ajax({
			url: "<?= base_url('WelcomeAdmin/changeaccess'); ?>",
			type: "POST",
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function() {
				document.location.href = "<?= base_url('WelcomeAdmin/roleaccess/'); ?>" + roleId;
			}
		});
	});

	$(function() {
		$('#tgl1').datetimepicker({
			format: "DD/MM/YYYY"
		});
		$('#tgl2').datetimepicker({
			format: "DD/MMM/YYYY"
		});
		$('#tgl3').datetimepicker({
			format: "DD/MMMM/YYYY"
		});

		$('#tgl4').datepicker({
			startDate: new Date(),
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true
		});
		$('#tgl5').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true,
		});
		$('#tgl6').datetimepicker({
			locale: 'id',
			format: 'DD-MMMM-YYYY'
		});
		$('#tgl7').datepicker({
			format: 'yyyy-mm',
			autoclose: true,
			todayHighlight: true,
		});
		$('#tgl8').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true,
		});
		$('#tgl9').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true,
		});
		$('.tgl11').datepicker({
			startDate: new Date(),
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true
		});
	});
	$(function() {
		var disableSpecificDates = ["11-4-2020", "13-4-2020", "15-4-2020", "17-4-2020"];
		$('#datepicker1').datepicker({
			format: 'mm/dd/yyyy',
			beforeShowDay: function(date) {
				dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
				if (disableSpecificDates.indexOf(dmy) != -1) {
					return false;
				} else {
					return true;
				}
			}
		});
		$('#datepicker1').datepicker("setDate", new Date());
	});
</script>
</body>

</html>