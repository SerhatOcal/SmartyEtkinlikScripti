<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>E-Posta Bilgileri</strong>
            </div>
                <div class="panel-body">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/add_email"); ?>">

                       <div class="form-group col-md-4">
                            <label>Protocol</label>
                            <input type="text" name="protocol" value="" class="form-control required" placeholder="örnek: smtp">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Host</label>
                            <input type="text" name="host" value="" class="form-control required" placeholder="örnek: ssl://smtp.goolemail.com">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Port</label>
                            <input type="text" name="port" value="" class="form-control required" placeholder="örnek: 465">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Kullanıcı</label>
                            <input type="text" name="user" value="" class="form-control required" placeholder="örnek: smartybilisim@gmail.com">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Kullanıcı Adı</label>
                            <input type="text" name="userName" value="" class="form-control required" placeholder="örnek: Serhat Öcal">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Şifre</label>
                            <input type="text" name="pass" value="" class="form-control required" placeholder="örnek: 123456">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Gönderen E-Posta</label>
                            <input type="text" name="from" value="" class="form-control required" placeholder="örnek: smartybilsim@gmail.com">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Gelen E-posta</label>
                            <input type="text" name="to" value="" class="form-control required" placeholder="örnek: smartybilsim@gmail.com">
                        </div>

                        <div class="clearfix"></div>
                        <div class="panel-footer pull-right">
                            <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                            <button type="reset" class="btn btn-warning btn-lg">Temizle</button>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/email");?>">iptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>