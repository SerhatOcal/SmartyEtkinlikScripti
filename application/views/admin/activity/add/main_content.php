<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Etkinlik Bilgileri</strong>
            </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/add_activity"); ?>">

                       <div class="form-group col-md-6">
                            <label>Etkinlik Başlığı</label>
                            <input type="text" name="title" value="" class="form-control required">
                        </div>

                        <div class="form-group col-md-3">
                            <label>Etkinlik Başlangıç Tarih ve Saat</label>
                            <input class="masked form-control" type="text" name="start_date" data-format="9999/99/99 99:99:99" data-placeholder="_" placeholder="YYYY/AA/GG 00:00:00"/>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Etkinlik Bitiş Tarih ve Saat</label>
                            <input class="masked form-control" type="text" name="stop_date" data-format="9999/99/99 99:99:99" data-placeholder="_" placeholder="YYYY/AA/GG 00:00:00"/>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Etkinlik Kategorisi</label>
                            <select class="form-control" name="activity_category_id">

                                <?php foreach (get_activity_category(array("isActive" => 1 )) as $category) { ?>
                                    <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Etkinliğin içerdiği Eğitim</label>
                            <select class="form-control" name="training_id">
                                <?php foreach (get_training(array("isActive" => 1 )) as $training) { ?>
                                    <option value="<?php echo $training->id; ?>"><?php echo $training->title; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Etkinlik Eğitmeni</label>
                            <select class="form-control" name="trainers_id">
                                <?php foreach (get_trainers(array("isActive" => 1 )) as $trainers) { ?>
                                    <option value="<?php echo $trainers->id; ?>"><?php echo $trainers->trainersName; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Etkinlik Ücreti</label>
                            <input type="text" name="price" value="" class="form-control required">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Etkinlik Konum (Harita)</label>
                            <input type="text" name="maps" value="" class="form-control required">
                        </div>


                        <div class="form-group col-md-12">
                            <label>Açık Adres</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="address" ></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Açıklama</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail" ></textarea>
                        </div>


                        <div class="clearfix"></div>
                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/activity");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>