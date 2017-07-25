<div class="container margin-top-30">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($referanss as $row) {?>
           <div class="col-md-2 margin-bottom-30">
                   <img class="img-responsive" src="<?php echo base_url("uploads/referans/$row->image"); ?>">
               <div class="item-box-desc">
                   <h5 class="text-center"><?php echo $row->name; ?></h5>
                   <h6><?php echo $row->weblink; ?></h6>
               </div>
           </div>
            <?php } ?>
        </div>
    </div>
</div>

