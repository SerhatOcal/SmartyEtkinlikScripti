<section>
    <div class="container">
        <div class="blog-post-item">
            <div class="col-md-12 text-center">
                <div>
                    <img class="img-responsive margin-bottom-30" src="<?php echo base_url("uploads/news/$newss->image"); ?>" alt="<?php echo $newss->image;?>">
                </div>
            </div>
            <h2 class="text-center"><?php echo $newss->title;?></h2>
            <ul class="blog-post-info list-inline text-center">
                <li>
                    <a href="#">
                        <i class="fa fa-clock-o"></i>
                        <span class="font-lato"><?php echo get_full_date_from_full_date($newss->date); ?></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-link"></i>
                        <span class="font-lato"><?php echo $newss->weblink; ?></span>
                    </a>
                </li>
            </ul>
            <p><?php echo $newss->detail;?></p>
            <p>
                <a class="btn btn-primary btn-lg" href="<?php echo base_url("haberler")?>"><i class="fa fa-chevron-left"></i> Geri Dön</a>
            </p>
        </div>
    </div>
</section>
