 <div class="container margin-top-30">
    <div class="row">
        <?php foreach ($news as $row) { ?>
            <div class="blog-post-item col-md-3 col-sm-6">
            <figure class="margin-bottom-20">
                <img class="img-responsive" src="<?php echo base_url("uploads/news/$row->image"); ?>" alt="<?php echo $row->image;?>">
            </figure>
            <h2>
                <a href="<?php echo base_url("haberler/detay/$row->id"); ?>">
                    <?php $strLen = strlen($row->title); echo ($strLen > 25) ? mb_substr($row->title,0,24) . "..." : $row->title; ?>
                </a>
            </h2>
            <ul class="blog-post-info list-inline">
                <li>
                    <a href="#">
                        <i class="fa fa-clock-o"></i>
                        <span class="font-lato text-center"><?php
                            echo get_full_date_from_full_date($row->date); ?>
                        </span>
                    </a>
                </li>
            </ul>
            <p>
                <?php $strLen = strlen($row->detail); echo ($strLen > 250) ? mb_substr($row->detail,0,50) . "..." : $row->detail; ?>
            </p>
            <a href="<?php echo base_url("haberler/detay/$row->id"); ?>" class="btn btn-reveal btn-default">
                <i class="fa fa-plus"></i>
                <span>Haberi Görüntüle</span>
            </a>
        </div>
        <?php } ?>
    </div>
</div>

