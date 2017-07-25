<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Slider Bilgileri</strong>
            </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/add_slider"); ?>">

                        <div class="form-group col-md-12">
                                    <label>Başlık Yazısı</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="title" ></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Detay Yazısı</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail" class="form-control required"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Detay Alt Yazısı</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="bride_detail" class="form-control required"></textarea>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Slider Linki</label>
                            <input type="text" name="url" value="" class="form-control required" placeholder="Örn: http://www.google.com">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Logo Ekle</label>
<!--                            <input id="imgInp" type="file"  name="logofile"  >-->
                            <input class="custom-file-upload form-control" type="file" name="imagefile" data-btn-text="Seç" />
                            <small class="text-muted block">Lütfen Slider için bir resim seçiniz (İdeal Resim Boyutu : 1920x700)</small>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Buton Başlık</label>
                            <input type="text" name="button_title" value="" class="form-control required" placeholder="Örn: Daha Fazla!">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Buton Goster / Gizle</label>
                            <div class="clearfix"></div>
                            <input class = "toggle_check"
                                   data-onstyle="success"
                                   data-size = "mini"
                                   data-on="Göster"
                                   data-off="Gizle"
                                   data-offstyle="danger"
                                   type="checkbox"
                                   name="button"
                                   data-toggle="toggle"
                            >
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/slider");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>