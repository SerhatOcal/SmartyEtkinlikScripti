<div id="header" class="sticky clearfix">
    <div id="topBar">
        <div class="container">
            <ul class="top-links list-inline pull-right">
                <li class="text-welcome hidden-xs no-text-underline"><i class="fa fa-phone fa-lg"></i><?php echo $contact->phone;?></li>
                <li class="text-welcome hidden-xs no-text-underline"><i class="fa fa-envelope fa-lg"></i><?php echo $contact->email;?></li>
            </ul>
        </div>
    </div>
    <header id="topNav">
        <div class="container">
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="logo pull-left" href="<?php echo base_url();?>">
                <img class="img-responsive" src="<?php echo base_url("uploads/$contact->logo"); ?>" alt="<?php echo $contact->logo?>">
            </a>
            <div class="navbar-collapse pull-right nav-main-collapse collapse">
                <nav class="nav-main">
                    <ul id="topMain" class="nav nav-pills nav-main">
                        <li class="dropdown">
                            <a href="<?php echo base_url();?>"><i class="fa fa-home"></i> ANASAYFA</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url("etkinlikler");?>" class="dropdown-toggle"><i class="fa fa-calendar dropdown-toggle"></i> EĞİTİM TAKVİMİ</a>
                            <ul class="dropdown-menu pull-left has-topBar">
                                <?php foreach ($categorys as $category) { ?>
                                <li>
                                    <?php if($category->isActive == 1) { ?>

                                    <a href="<?php echo base_url("etkinlikler/etkinliklistesi/$category->id");?>">
                                        <i class="fa fa-calendar dropdown-toggle"></i> <?php echo $category->title;?>
                                    </a>
                                </li>
                                <?php }} ?>
                                <li>
                                    <a href="<?php echo base_url("etkinlikler");?>">
                                        <i class="fa fa-calendar dropdown-toggle"></i> Tüm Etkinlikler
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url("egitimler");?>"><i class="fa fa-graduation-cap"></i> EĞİTİMLERİMİZ</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("hakkimizda");?>" class="dropdown-toggle"><i class="fa fa-question"></i> HAKKIMIZDA</a>
                            <ul class="dropdown-menu pull-left has-topBar">
                                <li><a href="<?php echo base_url("hakkimizda");?>"><i class="fa fa-info-circle dropdown-toggle"></i>Hakkımızda</a></li>
                                <li><a href="<?php echo base_url("referanslar");?>"><i class="fa fa-leaf dropdown-toggle"></i>Referanslar</a></li>
                                <li><a href="<?php echo base_url("insan_kaynaklari_politikamiz");?>"><i class="fa fa-bookmark dropdown-toggle"></i>İnsan Kaynakları Polİtİkamız</a></li>
                                <li><a href="<?php echo base_url("haberler");?>"><i class="fa fa-rss-square dropdown-toggle"></i>Haberler</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url("iletisim");?>" class="dropdown-toggle"><i class="fa fa-info dropdown-toggle"></i> BİZE ULAŞIN</a>
                            <ul class="dropdown-menu pull-left has-topBar">
                                <li><a href="<?php echo base_url("iletisim");?>"><i class="icon icon-info dropdown-toggle"></i>İletİşİm</a></li>
                                <li><a href="<?php echo base_url("egitmen_basvurusu");?>"><i class="fa fa-user dropdown-toggle"></i>Eğitmen Başvurusu</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
<span class="base_url hidden"><?php echo base_url();?></span>

