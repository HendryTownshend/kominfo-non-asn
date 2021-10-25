$('#changeRole').on('click', function () {
    const menuId = $($this).data('menu');
    const roleId = $($this).data('role');

    $.ajax({
        url: "<?php echo base_url('WelcomeAdmin/changeaccess'); ?>",
        type: "POST",
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function () {
            document.location.href = "<?php echo base_url('WelcomeAdmin/roleaccess/'); ?>" + roleId;
        }
    });
});