<div class="padding-15">
    <div class="login-box">
            <form class="sky-form boxed" action="<?php echo base_url("admin/forgot_validation"); ?>" method="post" data-success="Talebiniz Başarı ile alınmıştır." data-toastr-position="top-right">
            <header><i class="fa fa-users"></i> Şifre Yenileme Paneli</header>
            <fieldset>
                <section>
                    <h4 class="list-icons"><?php echo $this->session->flashdata('item');?></h4
                    <h4><?php echo validation_errors();?></h4>
                    <label class="label">Email Adresiniz</label>
                    <label class="input">
                        <i class="icon-append fa fa-envelope"></i>
                        <input type="text" name="email" required>
                        <span class="tooltip tooltip-top-right">Email Adres</span>
                    </label>
                    <span class="text-danger"><?php echo form_error('email');?></span>
                </section>
            </fieldset>
            <footer>
                <button type="submit" class="btn btn-primary pull-right"> Gönder</button>
            </footer>
        </form>
    </div>
</div>

