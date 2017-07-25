<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-transparent">
                    <strong>Kullanıcı Bilgileri</strong>
                </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/edit_users/$row->id"); ?>">

                        <div class="form-group col-md-6">
                            <label>Kullanıcı Adı</label>
                            <input type="text" name="username" value="<?php echo $row->username;?>" class="form-control required">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Şifre</label>
                            <input type="text" name="password" value="<?php echo $row->password;?>" class="form-control required">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Email Adresi</label>
                            <input type="text" name="email" value="<?php echo $row->email;?>" class="form-control required">
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/users");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>