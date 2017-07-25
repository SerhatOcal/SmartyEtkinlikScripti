<section class="page-header">
    <div class="container">
        <h1><?php echo $category->title;?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Anasayfa</a></li>
            <li><a href="<?php echo base_url("etkinlikler");?>">Etkinlikler</a></li>
            <li class="active"><?php echo $category->title;?></li>
        </ol>
    </div>
</section>
