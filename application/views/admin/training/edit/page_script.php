<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/bootstrap.swich/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {

        // Bootstrap toggle init
        $('.toggle-check').bootstrapToggle();

        // Bootstrap isActive Change

        $('.toggle_check').change(function() {

            var isActive  = $(this).prop('checked');
            var base_url  = $(".base_url").text();
            var id        = $(this).attr("dataID");

            $.post(base_url + "admin/isActiveSetterSliderButon", {id: id, isActive: isActive}, function (response) {
            });

        });

        // Fancybox toggle init

        $('.image-link').magnificPopup({type:'image'});

        // Fancybox link type

        $('.test-popup-link').magnificPopup({
            type: 'image'
        });

    });

</script>