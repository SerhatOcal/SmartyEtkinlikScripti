<?php
$parent     = $this->session->userdata("parent");
$activeItem = $this->session->userdata("activeItem");
?>
<aside id="aside">
    <nav id="sideNav">
        <ul class="nav nav-list">

            <li class="<?php echo ($parent == "desktop_folder") ? "active" : ""; ?>">
                <a class="dashboard" href="<?php echo base_url("admin/dashboard");?>">
                    <i class="main-icon fa fa-dashboard"></i> <span>Kontrol Paneli</span>
                </a>
            </li>

            <li class="<?php echo ($parent == "options_folder") ? "active" : ""; ?>">

                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-gears"></i> <span>Ayarlar</span>
                </a>

                <ul class="siderbar_menu" id="options_folder">
                    <li class="<?php echo ($activeItem == "contact") ? "active" : ""; ?>" id="contact">
                        <a href="<?php echo base_url("admin");?>/contact">Firma Ayarları</a>
                    </li>
                    <li class="<?php echo ($activeItem == "aboutus") ? "active" : ""; ?>" id="contact">
                        <a href="<?php echo base_url("admin");?>/aboutus">Hakkımızda</a>
                    </li>
                    <li class="<?php echo ($activeItem == "hurman_resourcee") ? "active" : ""; ?>" id="contact">
                        <a href="<?php echo base_url("admin");?>/hurman_resources">İnsan Kaynakları</a>
                    </li>
                    <li class="<?php echo ($activeItem == "email") ? "active" : ""; ?>" id="email">
                        <a href="<?php echo base_url("admin");?>/email">Mail Ayarları</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url("admin");?>/training">
                    <i class="main-icon fa fa-graduation-cap"></i> <span>Eğitimler</span>
                </a>
            </li>
            <li class="<?php echo ($parent == "activity_folder") ? "active" : ""; ?>">
                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-gears"></i> <span>Etkinlikler</span>
                </a>
                <ul class="siderbar_menu" id="activity_folder">

                    <li class="<?php echo ($activeItem == "contact") ? "active" : ""; ?>" id="activity_category">
                        <a href="<?php echo base_url("admin");?>/activity_category">Etkinlik Kategorisi</a>
                    </li>
                    <li class="<?php echo ($activeItem == "slider") ? "active" : ""; ?>" id="activity">
                        <a href="<?php echo base_url("admin");?>/activity">Etkinlikler</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url("admin");?>/trainers">
                    <i class="main-icon fa fa-pencil"></i> <span>Eğitmenler</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("admin");?>/slider">
                    <i class="main-icon fa fa-sliders"></i> <span>Slider Ayarları</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("admin");?>/referans">
                    <i class="main-icon fa fa-users"></i> <span>Referanslar</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("admin");?>/news">
                    <i class="main-icon fa fa-newspaper-o"></i> <span>Haberler</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("admin");?>/users">
                    <i class="main-icon fa fa-user"></i> <span>Kullanıcılar</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("admin");?>/newsletter">
                    <i class="main-icon fa fa-rss-square"></i> <span>Aboneler</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>">
                    <i class="main-icon fa fa-globe"></i> <span>Site Anasayfa</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>