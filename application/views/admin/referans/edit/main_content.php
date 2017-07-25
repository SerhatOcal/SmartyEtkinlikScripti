<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-transparent">
                    <strong>Müşteri Bilgileri</strong>
                </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/edit_referans/$row->id"); ?>">

                        <div class="form-group col-md-6">
                            <label>Müşteri Adı</label>
                            <input type="text" name="name" value="<?php echo $row->name;?>" class="form-control required">
                        </div>

                        <div class="form-group col-md-6 pull-right">
                            <label>Şuan Kullanılan Resim:</label>

                            <a class="thumbnail fancybox test-popup-link" rel="ligthbox"
                               href="<?php echo (is_file("uploads/referans/$row->image")) ? base_url("uploads/referans") . "/" . $row->image : base_url("uploads/defaultimg/referans_default_image.jpg") ?>">
                                <img class="img-responsive" style="width: 200px"  src="<?php
                                if(is_file("uploads/referans/$row->image")){
                                    echo base_url("uploads/referans/$row->image");
                                }
                                else{
                                    echo base_url("uploads/defaultimg/referans_default_image.jpg");
                                }?>" alt="<?php echo $row->image; ?>">
                            </a>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Müşteri Resmi</label>
                            <input class="custom-file-upload form-control" type="file" name="imagefile" data-btn-text="Seç" />
                        </div>

                        <div class="form-group col-md-6">
                            <label>Web Sayfası</label>
                            <input type="text" name="weblink" value="<?php echo $row->weblink;?>" class="form-control required">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Açıklama</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail" ><?php echo $row->detail;?></textarea>
                        </div>

                        <div class="clearfix"></div>
                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/referans");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>