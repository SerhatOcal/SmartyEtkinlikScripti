<div class="padding-15">
    <div class="login-box">
        <form action="<?php echo base_url("admin/login_validation"); ?>" method="post" class="sky-form boxed">
            <header><i class="fa fa-users"></i> Yönetim Paneli Girişi</header>
            <fieldset>
                <section>
                    <h4 class="list-icons"><?php echo $this->session->flashdata('success');?></h4
                    <label class="label">Kullanıcı Adı</label>
                    <label class="input">
                        <i class="icon-append fa fa-user"></i>
                        <input type="text" name="username">
                        <span class="tooltip tooltip-top-right">Kullanıcı Adı</span>
                    </label>
                    <span class="text-danger"><?php echo form_error('username');?></span>
                </section>
                <section>
                    <label class="label">Şifre</label>
                    <label class="input">
                        <i class="icon-append fa fa-lock"></i>
                        <input type="password" name="password">
                        <b class="tooltip tooltip-top-right">Şifre</b>
                    </label>
                    <label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Beni Hatırla</label>
                    <span class="text-danger"><?php echo form_error('password');?></span>

                </section>
            </fieldset>
            <footer>
                <button type="submit" class="btn btn-primary pull-right">Giriş Yap</button>
                <?php echo $this->session->flashdata('error');?>
                <div class="forgot-password pull-left">
                    <a class="myModal" href="#"><b>Şifremi Unuttum</b></a>
                </div>
            </footer>
        </form>
    </div>
</div>