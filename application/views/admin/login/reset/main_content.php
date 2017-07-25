<div class="padding-15">
    <div class="login-box">
            <form class="sky-form boxed" action="<?php echo base_url("admin/reset_password_validation"); ?>" method="post" data-success="Talebiniz Başarı ile alınmıştır." data-toastr-position="top-right">
            <header><i class="fa fa-users"></i> Şifre Yenileme</header>
            <fieldset>
                <section>
                    <?php $reset_key = $this->uri->segment(3);?>
                    <h4 class="list-icons"><?php echo $this->session->flashdata('item1');?></h4
                    <h4><?php echo validation_errors();?></h4>
                    <input type="hidden" name="reset_key" value="<?php echo $reset_key;?>">
                    <label class="label">Yeni Şifreniz</label>
                    <label class="input">
                        <i class="icon-append fa fa-key"></i>
                        <input type="password" name="password">
                        <span class="tooltip tooltip-top-right">Şifre</span>
                    </label>
                    <label class="label">Yeni Şifrenizi Tekrar Yazınız</label>
                    <label class="input">
                        <i class="icon-append fa fa-key"></i>
                        <input type="password" name="confirm_password">
                        <span class="tooltip tooltip-top-right">Şifre</span>
                    </label>
                </section>
            </fieldset>
            <footer>
                <button type="submit" class="btn btn-primary pull-right"> Gönder</button>
            </footer>
        </form>
    </div>
</div>

