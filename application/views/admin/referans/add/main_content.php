<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Müşteri Bilgileri</strong>
            </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/add_referans"); ?>">

                       <div class="form-group col-md-6">
                            <label>Müşteri Adı</label>
                            <input type="text" name="name" value="" class="form-control required">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Müşteri Resmi</label>
                            <input class="custom-file-upload form-control" type="file" name="imagefile" data-btn-text="Seç" />
                        </div>

                        <div class="form-group col-md-12">
                            <label>Web Sayfası</label>
                            <input type="text" name="weblink" value="" class="form-control required">
                        </div>

                        <div class="form-group col-md-12">
                                    <label>Açıklama</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail" ></textarea>
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