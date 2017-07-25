<section>
    <div class="container">
        <div class="row">
            <?php foreach ($trainings as $training) {?>
            <div class="col-md-6">
                <a href="<?php echo base_url("egitimler/detay/$training->id"); ?>"class="btn btn-default">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="pull left">
                                    <i class="fa fa-graduation-cap"></i>
                                    <?php echo $training->title;?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
