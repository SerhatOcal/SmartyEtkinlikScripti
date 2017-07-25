<section class="padding-30">
    <div class="container">
        <div class="row">
            <?php foreach ($activitys as $activity) {?>
                <div class="col-md-6">
                        <div class="row padding-10">
                            <div class="panel panel-default height-250">
                                <div class="panel-body padding-top-30">
                                    <h5 class="text-center">
                                        <i class="fa fa-calendar"></i>
                                        <span class="size-25"><?php echo get_full_date_from_full_date($activity->start_date)."/".get_full_date_from_full_date($activity->stop_date);?></span>
                                        <p class="margin-top-10 margin-bottom-10 size-20"><i class="fa fa-map-marker"> </i> <?php echo $activity->address;?></p>
                                        <h5 class="text-center"><i class="ico-hover-dark et-megaphone"> </i> <?php echo $activity->title;?></h5>
                                        <p class="text-center"><a href="<?php echo base_url("etkinlikler/detay/$activity->id"); ?>" class="btn btn-danger"><i class="fa fa-calendar"></i> Hemen Kaydol</a></p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <div class="heading-title heading-border-bottom heading-color">
                <h3>Smarty</h3>
            </div>
            <img class="pull-left img-responsive" src="<?php echo base_url("assets/site");?>/assets/images/logo_dark.png" alt="Smarty Logo" />
            <p>Günümüzde gelişen teknolojinin ve bilimsel buluşların hızı, bilgi edinme ve beceri geliştirme gerekliliğini ve bunu sürekli hale getirme zorunluluğunu açıkça ortaya koyuyor. Çalışanların mesleki donanımlarını arttırmak ve sürekli kendini yenileyen teknolojinin getirdiği kolaylıklardan faydalanabilmek için bile eğitimin önemi büyük. Smarty bu ihtiyacın nitelikli eğitim içerikleriyle karşılanmasını sağlamak amacıyla kurulduğu ilk günden itibaren, kurumsal eğitim alanında deneyimli bir yönetim ve alanında uzman eğitmen kadrosuyla iş yaşamında en çok ihtiyaç duyulan konuları belirleyerek eğitim içerikleri üretmektedir.
                Smarty çalışanlarınızın yetenek ve donanımlarını geliştirebileceği eğitim içeriklerini, kurumunuzun ihtiyacına uygun olarak yapılandıran ve bu eğitimlerin organizasyonunu üstlenen bir çözüm ortağıdır. İş yaşamında çalışanların bilgi, beceri ve yeteneklerinin geliştirilmeleri çalıştıkları kurumların başarısını belirler. Smarty kurum içi eğitim içerikleriyle iş birliği yaptığı kurumların verimliliğine katkı sunmayı hedefler. Alanında uzman eğitmenlerle iş birliği yaparak  kapsamlı eğitim içerikleri hazırlar ve eğitim içeriklerini yeni ihtiyaçlar doğrultusunda geliştirir. Smarty kurumsal eğitimlerini kurum içi eğitimler ya da açık sınıf eğitimleri şeklinde gerçekleştirir. Kurumsal dünyanın nabzını tutan Smarty eğitimde yenilikçi ve kalıcı öğrenmeyi hedefleyen alternatif yaklaşımları yakından takip eder.
                İhtiyaca yönelik eğitimler
                Alanında uzman eğitmenler
                Yüksek verimlilik</p>
            <p>
                <a class="btn btn-danger" href="<?php echo base_url("referanslar");?>"><i class="fa fa-thumbs-up"> </i>Referanslar</a>
                <a class="btn btn-danger" href="<?php echo base_url("iletisim");?>"><i class="fa fa fa-info"> </i>İletişim</a>
            </p>
        </div>
        <div class="col-md-6">
            <div class="heading-title heading-border-bottom heading-color">
                <h3>Haberler</h3>
            </div>
        </div>
              <?php foreach ($news as $row) { ?>
        <div class="col-md-6">
            <div class="owl-carousel text-center owl-mini-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
                <div class="testimonial">
                    <figure>
                        <img class="rounded margin-bottom-10" src="<?php echo base_url("uploads/news/$row->image"); ?>" alt="<?php echo $row->image;?>">
                    </figure>
                    <div class="testimonial-content nopadding">
                        <p><?php echo $row->title;?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
