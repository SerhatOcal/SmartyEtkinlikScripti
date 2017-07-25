<section class="page-header">
    <div class="container">
        <?php $activity_trainings = $activity_training_list[$activitys->training_id];?>
        <h1><?php echo $activity_trainings->title;?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Anasayfa</a></li>
            <li><a href="<?php echo base_url("etkinlikler");?>">Etkinlikler</a></li>
            <li class="active"><?php echo $activity_trainings->title;?></li>
        </ol>
    </div>
</section>
