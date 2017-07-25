<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/bootstrap.swich/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/jquery/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {

        var base_url = $(".base_url").text();


        // Bootstrap toggle init
        $('.toggle-check').bootstrapToggle();

        // Bootstrap isActive Change

        $('.toggle_check').change(function() {

            var isActive  = $(this).prop('checked');
            var base_url  = $(".base_url").text();
            var id        = $(this).attr("dataID");

            $.post(base_url + "admin/isActiveSetter", {id: id, isActive: isActive}, function (response) {

            });

        });

        //Sortable init.
        $(".sortableList").sortable();

        $(".sortableList").on("sortupdate", function (event, ui) {

            var data = $(this).sortable("serialize");

            $.post(base_url + "admin/contactRankUpdate" ,{data:data}, function (response) {

            });

        });
    });

</script>