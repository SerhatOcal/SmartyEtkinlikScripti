<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Firma Bilgileri</strong>
            </div>
                <div class="panel-body">
                    <div class="col-md-6">
                    <form class="myform" method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/add_contact"); ?>">
                            <div class="form-group">
                                    <label>Ünvan</label>
                                <input type="text" name="title" value="" class="form-control required">
                            </div>

                            <div class="form-group">
                                     <label>Adres</label>
                                <input type="text" name="address" value="" class="form-control required">
                            </div>

                            <div class="form-group">
                                    <label>Misyon</label>
                                <div class="fancy-form">
                                    <textarea rows="5" name="mission" class="form-control required"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label>Vizyon</label>
                                <div class="fancy-form">
                                    <textarea rows="5" name="vision" class="form-control required"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label>Banka Bilgileri</label>
                                <input type="text" name="bank_account" value="" class="form-control required">
                            </div>

                            <div class="form-group">
                                    <label>Mersis Numarası</label>
                                <input type="text" name="mersis_id" value="" class="form-control required">
                            </div>

                            <div class="form-group">
                                    <label>Vergi Dairesi</label>
                                <input type="text" name="tax_circle" value="" class="form-control required">
                            </div>

                            <div class="form-group">
                                <label>Vergi Numarası</label>
                                <input type="text" name="tax_id" value="" class="form-control required">
                            </div>

                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" name="youtube" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                        <label>instagram</label>
                            <input type="text" name="instagram" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Google Plus</label>
                            <input type="text" name="google_plus" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Linkedin</label>
                            <input type="text" name="linkedin" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Google Analytics</label>
                            <input type="text" name="google_analytics" value="" class="form-control required">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Telefon Numarası</label>
                            <input type="text" name="phone" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                             <label>Fax</label>
                            <input type="text" name="fax" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>E-Posta</label>
                            <input type="text" name="email" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Web Sitesi</label>
                            <input type="text" name="web" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Hakkımızda Yazısı</label>
                            <div class="fancy-form">
                                <textarea rows="5" name="about_us" class="form-control required"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Meta Descripion</label>
                            <div class="fancy-form">
                                <textarea rows="5" name="meta_description" class="form-control required"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Meta Keyword</label>
                            <div class="fancy-form">
                                <textarea rows="5" name="meta_keyword" class="form-control required"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Google Maps</label>
                            <input type="text" name="maps" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Map Latt</label>
                            <input type="text" name="google_latt" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Map Att</label>
                            <input type="text" name="map_att" value="" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Logo Ekle</label>

<!--                            <input id="imgInp" type="file"  name="logofile"  >-->
                            <div class="fancy-file-upload fancy-file-info">
                                <i class="fa fa-upload"></i>
                                <input type="file" class="form-control" name="logofile" onchange="jQuery(this).next('input').val(this.value);" />
                                <input type="text" class="form-control" name="logofile" placeholder="Dosya Seçilmedi" readonly="" />
                                <span class="button">Seç</span>
                            </div>
                            <small>Resim boyutu max 125x90 piksel olmalıdır.</small>
                        </div>
                    </div>

                    <div class="panel-footer pull-right">
                        <a href="javascript:void(0);" type="submit" class="btn btn-info btn-lg" id="send">Kaydet</a>
                        <button type="reset"  class="btn btn-warning btn-lg">Temizle</button>
                        <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/contact");?>">iptal</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>