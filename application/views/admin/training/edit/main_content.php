<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-transparent">
                    <strong>Eğitim Bilgileri</strong>
                </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/edit_training/$row->id"); ?>">

                        <div class="form-group col-md-6">
                            <label>Başlık</label>
                            <input type="text" name="title" value="<?php echo $row->title; ?>" class="form-control required" placeholder="Bu kayıt için bir başlık giriniz.">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Eğitim Fotoğrafı</label>
                            <input class="custom-file-upload form-control" type="file" name="imagefile" data-btn-text="Seç" />
                        </div>

                        <div class="form-group col-md-12">
                            <label>Eğitim Özellikleri (Aralarına virgül koyarak yazınız.)</label>
                            <input type="text" name="feature" value="<?php echo $row->feature; ?>" class="form-control required" placeholder="Özellik,Özellik1,Özellik2">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Eğitim ile ilgili Önemli Bilgi</label>
                            <input type="text" name="information" value="<?php echo $row->information; ?>" class="form-control required" placeholder="Eğitimle ilgili çok önemli bir bilgi yazın.">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Keyword (Aralarına virgül koyarak yazınız.)</label>
                            <input type="text" name="keyword" value="<?php echo $row->keyword; ?>" class="form-control required" placeholder="Keyword,Keyword1,Keyword2">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Açıklama</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="detail" ><?php echo $row->detail; ?></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Açıklama 1</label>
                            <textarea class="summernote form-control" data-height="200" data-lang="en-US" name="bride_detail" class="form-control required"><?php echo $row->bride_detail; ?></textarea>
                        </div>

                        <div class="clearfix"></div>
                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/training");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>