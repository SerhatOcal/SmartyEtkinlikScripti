<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-transparent">
                    <strong>İnsan Kaynakları Bilgileri</strong>
                </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/add_hurman_resources"); ?>">

                        <div class="form-group col-md-12">
                            <label>Başlık</label>
                            <input type="text" name="title" value="" class="form-control required">
                        </div>

                        <div class="form-group col-md-12">
                            <label>İnsan Kaynları Açıklama</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail" class="form-control required"></textarea>
                        </div>

                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/new_hurman_resources");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>