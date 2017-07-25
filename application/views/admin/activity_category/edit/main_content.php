<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Etkinlik Kategori Bilgileri</strong>
            </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/edit_activity_category/$row->id"); ?>">
                        <div class="form-group col-md-4">
                            <label>Kategori Adı</label>
                            <input type="text" name="title" class="form-control required" value="<?php echo $row->title;?>">
                        </div>
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