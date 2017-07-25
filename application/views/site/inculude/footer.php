<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Footer Logo -->
                <img class="footer-logo" src="<?php echo base_url("assets/site");?>/assets/images/logo-footer.png" alt="" />
                <!-- Contact Address -->
                <address>
                    <ul class="list-unstyled">
                        <li class="footer-sprite address">
                            <?php echo $contact->address;?>
                        </li>
                        <li class="footer-sprite phone">
                            <?php echo $contact->phone;?>
                        </li>
                        <li class="footer-sprite email">
                            <a href="mailto:support@webmaster.com"><?php echo $contact->email;?>
                            </a>
                        </li>
                    </ul>
                </address>
            </div>
            <div class="col-md-4">
                <h4 class="letter-spacing-1">HIZLI MENÜ</h4>
                <ul class="footer-posts list-unstyled">
                    <li>
                        <a href="<?php base_url();?>">Anasayfa</a>
                    </li>
                    <li>
                        <a href="http://www.smartybilisim.com/etkinlik/etkinlikler">Eğitim Takvimi</a>
                    </li>
                    <li>
                        <a href="http://www.smartybilisim.com/etkinlik/egitimler">Eğitimlerimiz</a>
                    </li>
                    <li>
                        <a href="http://www.smartybilisim.com/etkinlik/hakkimizda">Hakkımızda</a>
                    </li>
                    <li>
                        <a href="http://www.smartybilisim.com/etkinlik/iletisim">İletişim</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="letter-spacing-1">E-BÜLTEN ABONELİĞİ</h4>
                <p>Katalog, Broşür ve Şirketimiz ile ilgili bilgi almak istiyorsanız sistemimize kayıt olun!</p>

                <form class="validate" action="<?php echo base_url("admin/add_newsletter"); ?>" method="post" data-success="Abone listesine Eklendiniz." data-toastr-position="bottom-right">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control required" placeholder="Email Adresiniz">
                        <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Kayıt Ol</button>
									</span>
                    </div>
                </form>
                <div class="margin-top-20">
                    <a href="<?php echo $contact->facebook;?>" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank">

                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <ul class="pull-right nomargin list-inline mobile-block">
                <li><a href="http://www.smartybilisim.com/etkinlik/">Smarty</a></li>
            </ul>
            &copy; <?php echo date("Y");?> All Rights Reserved
        </div>
    </div>

    <input type="hidden" class="<?php echo base_url()?>">
</footer>
<?php $this->load->view("site/inculude/include_script");?>
