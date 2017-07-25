<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-transparent">
                    <strong>Slider Bilgileri</strong>
                </div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/edit_slider/$row->id"); ?>">

                        <div class="form-group col-md-12">
                            <label>Başlık Yazısı</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="title"><?php echo $row->title; ?></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Detay Yazısı</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail"><?php echo $row->detail; ?></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Detay Alt Yazısı</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="bride_detail"><?php echo $row->bride_detail; ?></textarea>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Slider Linki</label>
                            <input type="text" name="url" class="form-control required" value="<?php echo $row->url; ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Logo Ekle</label>

                            <a class="test-popup-link" href="<?php echo (is_file("uploads/slider/$row->image")) ? base_url("uploads/slider") . "/" . $row->image : base_url("uploads/defaultimg/slider_default_image.jpg") ?>">
                                <img class="img-responsive "  src="<?php
                                if(is_file("uploads/slider/$row->image")){
                                    echo base_url("uploads/slider/$row->image");
                                }
                                else{
                                    echo base_url("uploads/defaultimg/slider_default_image.jpg");
                                }?>" alt="<?php echo $row->image; ?>">
                            </a>
                            <input class="custom-file-upload form-control mt-50" type="file" name="imagefile" data-btn-text="Seç" />
                            <small class="text-muted block">Lütfen Slider için bir resim seçiniz (İdeal Resim Boyutu : 1920x700)</small>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Buton Başlık</label>
                            <input type="text" name="button_title" class="form-control required" value="<?php echo $row->button_title; ?>">
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
                                <?php echo ($row->button == 1) ? "checked" : ""; ?>
                            >
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/slider");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>