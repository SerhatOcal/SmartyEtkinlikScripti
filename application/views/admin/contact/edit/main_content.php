<div id="content" class="padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Firma Bilgileri</strong>
            </div>
                <div class="panel-body">
                    <div class="col-md-6">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/edit_contact/$row->id"); ?>">
                            <div class="form-group">
                                    <label>Ünvan</label>
                                <input type="text" name="title" class="form-control required" value="<?php echo $row->title;?>">
                            </div>

                            <div class="form-group">
                                     <label>Adres</label>
                                <input type="text" name="address" value="<?php echo $row->address;?>" class="form-control required">
                            </div>

                            <div class="form-group">
                                    <label>Misyon</label>
                                <div class="fancy-form">
                                    <textarea rows="5" name="mission" class="form-control"><?php echo $row->mission;?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label>Vizyon</label>
                                <div class="fancy-form">
                                    <textarea rows="5" name="vision" class="form-control"><?php echo $row->vision;?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label>Banka Bilgileri</label>
                                <input type="text" name="bank_account" value="<?php echo $row->bank_account;?>" class="form-control required">
                            </div>

                            <div class="form-group">
                                    <label>Mersis Numarası</label>
                                <input type="text" name="mersis_id" value="<?php echo $row->mersis_id;?>" class="form-control required">
                            </div>

                            <div class="form-group">
                                    <label>Vergi Dairesi</label>
                                <input type="text" name="tax_circle" value="<?php echo $row->tax_circle;?>" class="form-control required">
                            </div>

                            <div class="form-group">
                                <label>Vergi Numarası</label>
                                <input type="text" name="tax_id" value="<?php echo $row->tax_id;?>" class="form-control required">
                            </div>

                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" value="<?php echo $row->facebook;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" value="<?php echo $row->twitter;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" name="youtube" value="<?php echo $row->youtube;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                        <label>instagram</label>
                            <input type="text" name="instagram" value="<?php echo $row->instagram;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Google Plus</label>
                            <input type="text" name="google_plus" value="<?php echo $row->google_plus;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Linkedin</label>
                            <input type="text" name="linkedin" value="<?php echo $row->linkedin;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Google Analytics</label>
                            <input type="text" name="google_analytics" value="<?php echo $row->google_analytics;?>" class="form-control required">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Telefon Numarası</label>
                            <input type="text" name="phone" class="form-control required" value="<?php echo $row->phone;?>">
                        </div>

                        <div class="form-group">
                             <label>Fax</label>
                            <input type="text" name="fax" class="form-control required" value="<?php echo $row->fax;?>">
                        </div>

                        <div class="form-group">
                            <label>E-Posta</label>
                            <input type="text" name="email" value="<?php echo $row->email;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Web Sitesi</label>
                            <input type="text" name="web" value="<?php echo $row->web;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Hakkımızda Yazısı</label>
                            <div class="fancy-form">
                                <textarea rows="5" name="about_us" class="form-control"><?php echo $row->about_us;?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Meta Descripion</label>
                            <div class="fancy-form">
                                <textarea rows="5" name="meta_description" class="form-control"><?php echo $row->meta_description;?></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Meta Keyword</label>
                            <div class="fancy-form">
                                <textarea rows="5" name="meta_keyword" class="form-control"><?php echo $row->meta_keyword;?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Google Maps</label>
                            <input type="text" name="maps" value="<?php echo $row->maps;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Map Latt</label>
                            <input type="text" name="google_latt" value="<?php echo $row->google_latt;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Map Att</label>
                            <input type="text" name="map_att" value="<?php echo $row->map_att;?>" class="form-control required">
                        </div>

                        <div class="form-group">
                            <label>Şuanda Kullanılan Logo</label>
                            <a href="<?php echo (is_file("uploads/$row->logo")) ? base_url("uploads") . "/" . $row->logo : base_url("uploads/defaultimg/contact_default_image.jpg") ?>">
                                <img class="img-responsive "  src="<?php
                                if(is_file("uploads/$row->logo")){
                                    echo base_url("uploads/$row->logo");
                                }
                                else{
                                    echo base_url("uploads/defaultimg/contact_default_image.jpg");
                                }?>" alt="<?php echo $row->logo; ?>">
                            </a>
                            <div class="fancy-file-upload fancy-file-info">
                                <i class="fa fa-upload"></i>
                                <input type="file" class="form-control" name="logofile" onchange="jQuery(this).next('input').val(this.value);" />
                                <input type="text" class="form-control" name="logofile" placeholder="Dosya Seçilmedi" readonly="" />
                                <span class="button">Seç</span>
                            </div>
                            <small>Resim formatı PNG ve boyutu max 125x90 piksel olmalıdır.</small>

                        </div>
                    </div>

                    <div class="panel-footer pull-right">
                        <button type="submit" class="btn btn-info btn-lg">Kaydet</button>
                        <a class="btn btn-danger btn-lg" href="<?php echo base_url("admin/contact");?>">iptal</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>