<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/datatables/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/datatables/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/datatables/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/admin");?>/assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    var base_url = $(".base_url").text();

        // Fancybox toggle init

        $('.image-link').magnificPopup({type:'image'});

        // Fancybox link type

        $('.test-popup-link').magnificPopup({
            type: 'image'
        });

        //Sortable init.
        $( ".sortableList" ).sortable();

        $( ".sortableList" ).on("sortupdate", function (event, ui) {

            var data = $(this).sortable("serialize");

            $.post(base_url +"admin/sliderRankUpdate" ,{data:data}, function (response) {
            });
        });


        // Columns Reorder
        function initTable5() {

                    var table = jQuery('#sample_5');

                    /* Fixed header extension: http://datatables.net/extensions/keytable/ */

                    var oTable = table.dataTable({
                        "order": [
                            [0, 'asc']
                        ],
                        "lengthMenu": [
                            [5, 15, 20, -1],
                            [5, 15, 20, "All"] // change per page values here
                        ],
                        "pageLength": 10, // set the initial value,
                        "columnDefs": [{  // set default column settings
                            'orderable': false,
                            'targets': [0]
                        }, {
                            "searchable": false,
                            "targets": [0]
                        }],
                        "order": [
                            [1, "asc"]
                        ]
                    });

                    var oTableColReorder = new jQuery.fn.dataTable.ColReorder( oTable );

                    var tableWrapper = jQuery('#sample_6_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
                    tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
                }

        // Init each table
        initTable5();

});
</script>
