<header id="header">
    <button id="mobileMenuBtn"></button>
    <span class="logo pull-left">
        <img src="<?php echo base_url("assets/admin");?>/assets/images/logo_light.png" alt="admin panel" height="35" />
    </span>
    <nav>
        <ul class="nav pull-right">
            <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <span class="user-name">
                        <?php echo $this->session->userdata('username')." olarak giriş yaptınız";?><i class="fa fa-angle-down"></i>
                    </span>
                </a>
                <ul class="dropdown-menu hold-on-click">
                    <li>
                        <a href="<?php echo base_url('admin/logout');?>"><i class="fa fa-power-off"></i> Çıkış Yap</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<span class="base_url hidden"><?php echo base_url(); ?></span>
