<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="img-responsive" src="<?php echo base_url("uploads/training") . "/" . $trainings->image; ?>" alt="<?php echo $trainings->image;?>">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-7">
        <h2 class="size-25"><?php echo $trainings->title;?></h2>
          <p><?php echo $trainings->detail;?></p>

          <div class="col-md-6">
            <ul class="list-unstyled list-icons nopadding-bottom padding-15">
              <?php $explode = explode("," ,$trainings->feature);?>
              <?php foreach($explode as $feature) { ?>
                <li class="margin-bottom-5"><i class="fa fa-check text-success size-14"></i> <?php echo $feature ?></li>
              <?php } ?>
            </ul>
          </div>

          <div class="col-md-6">
            <ul class="list-unstyled list-icons nopadding-bottom padding-15">
                <li class="margin-bottom-5 pull-right"><i class="fa fa-tags text-success size-14"></i> <?php echo $trainings->keyword;?></li>
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
      <div class="col-md-12 margin-bottom-30"><?php echo $trainings->bride_detail;?></div>
    </div>
    <div class="col-md-12">
      <div class="alert alert-success margin-bottom-30" id="kapat">
        <p><?php echo $trainings->information; ?></p>
      </div>
    </div>

    <div class="col-md-12">
      <h3 class="mb40">Benzer Eğitimler</h3>
      <div class="divider divider-color"></div>
    </div>

    <div class="col md-12">
      <div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
        <?php foreach ($training as $trainings) { ?>
        <div class="img-hover">
          <a href="<?php echo base_url("egitimler/detay/$trainings->id"); ?>">
            <img class="img-responsive" src="<?php echo base_url("uploads/training") . "/" . $trainings->image; ?>" alt="<?php echo $trainings->image;?>">
          </a>
          <h4 class="text-left margin-top-20"><a href="<?php echo base_url("egitimler/detay/$trainings->id"); ?>"><?php echo $trainings->title;?></a></h4>
        </div>
        <?php } ?>
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
          <form class="validate" action="<?php echo base_url("egitimler/sendmail"); ?>" method="post" data-success="Talebiniz Başarı ile alınmıştır." data-toastr-position="top-right">
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
              <button type="submit" class="btn btn-primary"> <i class="fa fa-thumbs-o-up"></i>Başvur</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</section>

