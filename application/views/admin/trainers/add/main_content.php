<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-transparent">
                    <strong>Eğitmen Bilgileri</strong>
                </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/add_trainers"); ?>">

                        <div class="form-group col-md-4">
                            <label>Eğitmen Adı Soyadı</label>
                            <input type="text" name="trainersName" value="" class="form-control required">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Eğitmen Hakkında</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail" class="form-control required"></textarea>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Logo Ekle</label>
                            <input class="custom-file-upload form-control" type="file" name="imagefile" data-btn-text="Seç" />
                            <small class="text-muted block">Lütfen bir resim seçiniz (İdeal Resim Boyutu : 140x140)</small>
                        </div>

                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/trainers");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>