<div id="map2" class="height-400 grayscale">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $contact->maps;?>"></iframe><br/>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <h2>İletişim Formu</h2>
                <div id="alert_success" class="alert alert-success margin-bottom-30">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Teşekürler</strong> Mesajınız Başarı ile Gönderilmiştir.
                </div>
                <div id="alert_failed" class="alert alert-danger margin-bottom-30">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Hay Aksi</strong> Mesajınız gönderilmemeiştir lütfen tekrar deneyiniz.
                </div>
                <div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Üzgünüm</strong> (*) alanları doldurmanız gerekmektedir.
                </div>
                <form class="validate" action="<?php echo base_url("iletisim/sendmail"); ?>" method="post" data-success="Mesajınız Başırıyla Gönderilmiştir." data-toastr-position="top-right">
                    <fieldset>
                        <input type="hidden" name="action" value="contact_send" />
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="contact:name">Ad ve Soyadınız *</label>
                                    <input required type="text" value="" class="form-control" name="name" id="contact:name">
                                </div>
                                <div class="col-md-4">
                                    <label for="contact:email">E-mail Addresiniz *</label>
                                    <input required type="email" value="" class="form-control" name="email" id="contact:email">
                                </div>
                                <div class="col-md-4">
                                    <label for="contact:phone">Telefon Numaranız</label>
                                    <input type="text" value="" class="form-control" name="phone" id="contact:phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <label for="contact:subject">Konu *</label>
                                    <input required type="text" value="" class="form-control" name="subject" id="contact:subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="contact:message">Mesajınız *</label>
                                    <textarea required maxlength="10000" rows="8" class="form-control" name="message" id="contact:message"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> GÖNDER</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-3">
                <h2>Adres ve Telefon</h2>
                <p>
                    <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong><?php echo $contact->address;?></span>
                    <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="Tel:+90 (212) 333 33 33"><?php echo $contact->phone;?></a></span>
                    <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com"><?php echo $contact->email;?></a></span>
                </p>
                <hr />
                <h4 class="font300">Çalışma Saatleri</h4>
                <p>
                    <span class="block"><strong>Pazartesi - Cuma:</strong> 09:00 - 18:00</span>
                    <span class="block"><strong>Cumartesi:</strong> Kapalı</span>
                    <span class="block"><strong>Pazar:</strong> Kapalı</span>
                </p>
            </div>
        </div>
    </div>
</section>
