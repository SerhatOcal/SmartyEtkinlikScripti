<div class="text-center margin-top-30 margin-bottom-30">
    <div class="owl-carousel nomargin" data-plugin-options='{"items":8, "singleItem": false, "autoPlay": true}'>
        <?php foreach ($referanss as $row) { ?>
        <div>
            <img class="img-responsive" src="<?php echo base_url("uploads/referans/$row->image"); ?>" width="125" height="125">
        </div>
        <?php } ?>
    </div>
</div>

