<section class="padding-20">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center"><span>Eğitim Bilgileri</span</h2>
        <hr>
      </div>
    </div>
    <?php $activity_trainings = $activity_training_list[$activitys->training_id];?>
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="img-responsive" src="<?php echo base_url("uploads/training") . "/" . $activity_trainings->image; ?>" alt="<?php echo $activity_trainings->image;?>">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-7">
        <h2 class="size-25"><?php echo $activity_trainings->title;?></h2>
        <p><?php echo $activity_trainings->detail;?></p>
        <div class="col-md-6">
          <ul class="list-unstyled list-icons nopadding-bottom padding-15">
            <?php $explode = explode("," ,$activity_trainings->feature);?>
            <?php foreach($explode as $feature) { ?>
              <li class="margin-bottom-5"><i class="fa fa-check text-success size-14"></i> <?php echo $feature ?></li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-unstyled list-icons nopadding-bottom padding-15">
                <li class="margin-bottom-5 pull-right"><i class="fa fa-tags text-success size-14"></i> <?php echo $activity_trainings->keyword;?></li>
            </ul>
            <a href="#" class="btn btn-3d btn-xlg btn-featured btn-danger pull-right" data-toggle="modal" data-target="#myModal">
              <i class="et-megaphone"></i>
              <span>Kurumsal Eğitim Talebi</span>
            </a>
          </div>
      </div>
    </div>
    <div class="divider divider-center divider-color">
      <i class="fa fa-chevron-down"></i>
    </div>
    <div class="row">
      <div class="col-md-8 margin-bottom-30 height-500"><?php echo $activity_trainings->bride_detail;?></div>
      <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h2 class="size-16 margin-bottom-0"><i class="fa fa-money"></i> Etkinlik Ücreti</h2>
        </div>
        <div class="panel-body padding-5">
          <h3 class="text-center margin-bottom-0"><?php echo $activitys->price ." TL + KDV"; ?></h3>
        </div>
      </div>
      </div>
      <div class="col-md-4">

      <div class="panel panel-success">
        <div class="panel-heading">
          <h2 class="size-16 margin-bottom-0"><i class="fa fa-clock-o"></i> Etkinlik Saati</h2>
        </div>
        <div class="panel-body padding-5">
          <h3 class="text-center margin-bottom-0"><?php echo get_full_date_from_full_date($activitys->start_date);?></h3>
          <div class="timeline-line color-yellowgreen text-center size-30"><?php echo @date_day($activitys->start_date);?></div>
        </div>
      </div>
      </div>

      <div class="col-md-4 pull-right">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h2 class="size-16 margin-bottom-0"><i class="fa fa-map-marker"></i> Etkinlik Açık Adres</h2>
        </div>
        <div class="panel-body padding-5">
          <h3 class="text-center margin-bottom-0"><?php echo $activitys->address; ?></h3>
        </div>
      </div>
      </div>

      <div class="col-md-4 pull-right margin-bottom-100">
        <iframe src="<?php echo $activitys->maps;?>" width="360" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-12">
      <div class="alert alert-success margin-bottom-30" id="kapat">
        <p><?php echo $activity_trainings->information; ?></p>
      </div>
    </div>

  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center"><span>Eğitmen Bilgileri</span</h2>
      <hr>
    </div>
  </div>
    <?php $activity_trainers = $activity_trainers_list[$activitys->trainers_id];?>
  <div class="col-md-12">
    <div class="col-md-2">
      <img class="img-responsive" src="<?php echo base_url("uploads/trainers") . "/" . $activity_trainers->image; ?>" alt="<?php echo $activity_trainers->image;?>">
      <div class="col-md-12 text-center">
        <?php echo $activity_trainers->trainersName;?>
      </div>
    </div>
    <div class="col-md-10">
      <?php echo $activity_trainers->detail;?>
    </div>
  </div>
</div>
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          <h4 class="modal-title" id="myModalLabel">Kurumiçi Eğitim Talebi Başvurusu</h4>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <p>Aşağıdaki formu doldurarak kurumiçi eğitim talebi için sizinle iletişime geçmemizi sağlayabilirsiniz.</p>
          <form class="validate" action="<?php echo base_url("egitimler/add_company"); ?>" method="post" data-success="Talebiniz Başarı ile alınmıştır." data-toastr-position="top-right">
            <fieldset>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-6 col-sm-6">
                    <label>Adınız Soyadınız *</label>
                    <input type="text" name="name" class="form-control required">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <label>Telefon Numaranız *</label>
                    <input type="text" name="phone" class="form-control required">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-6 col-sm-6">
                    <label>Email Adresiniz*</label>
                    <input type="text" name="email" class="form-control required">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <label>Şirket İsminiz</label>
                    <input type="text" name="company" class="form-control">
                  </div>
                </div>
              </div>
            </fieldset>
            <!-- Modal Footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">İptal</button>
              <button type="submit" class="btn btn-primary saveBtn"> <i class="fa fa-thumbs-o-up"></i>Başvur</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</section>

