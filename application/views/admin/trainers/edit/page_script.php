<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {

        // Fancybox toggle init

        $('.image-link').magnificPopup({type:'image'});

        // Fancybox link type

        $('.test-popup-link').magnificPopup({
            type: 'image'
        });

    });

</script>