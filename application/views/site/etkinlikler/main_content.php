<section>
    <div class="container">
        <?php foreach ($activitys as $activity) { ?>

            <div class="box-inner">
            <div class="timeline">
                <div class="timeline-item timeline-item-bordered">
                    <div class="timeline-entry">
                        <span class="timeline-line"><?php echo get_full_date_from_full_date($activity->start_date);?></span>
                        <h6 class="margin-top-10">Saat:<?php echo get_full_date_clock($activity->start_date);?></h6>
                        <div class="timeline-line size-18 color-yellowgreen"><?php echo @date_day($activity->start_date);?></div>
                    </div>
                    <?php $activity_trainings = $activity_training_list[$activity->training_id];?>

                    <?php $activity_category = $activity_categories_list[$activity->activity_category_id];?>

                    <h2 class="bold size-17"><?php echo $activity_trainings->title;?><span> (<?php echo $activity_category->title;?>)</span></h2>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <img class="img-responsive" src="<?php echo base_url("uploads/training") . "/" . $activity_trainings->image; ?>" alt="<?php echo $activity_trainings->image;?>">
                                <div class="col-md-4 col-sm-4 col-xs-4 padding-0 margin-top-10">
                                    <?php $activity_trainers = $activity_trainers_list[$activity->trainers_id];?>
                                    <img class="img-responsive" src="<?php echo base_url("uploads/trainers") . "/" . $activity_trainers->image; ?>" alt="<?php echo $activity_trainers->image;?>">
                                </div>
                            <div class="col-md-8 margin-top-30">
                                <span><h4>Eğitmen</h4><?php echo $activity_trainers->trainersName;?></span>
                            </div>
                        </div>
                        <p><?php echo $activity_trainings->detail;?></p>
                        <div class="col-md-8 padding-0">
                            <h5>Etkinlik Yeri: <span><?php echo $activity->address;?></span></h5>
                            <h5>Katılım Ücreti:<span> <i class="fa fa-money"></i> <?php echo $activity->price ." TL + KDV";?></span></h5>

                            <h5>Daha Fazla Bilgi için:<span> <i class="fa fa-phone"></i> +90 (216) 333 33 33</span></h5>
                            <div class="col-md-4 pull-right">
                                <a href="<?php echo base_url("etkinlikler/detay/$activity->id"); ?>" class="btn btn-danger pull-right">
                                    <i class="fa fa-calendar"></i>
                                    <span>DETAYLAR</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>