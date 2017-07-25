<div id="content" class="dashboard padding-20">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="box danger">
                <div class="box-title">
                    <h3><a href="#">Haberler</a></h3>
                    <h5 class="block"><?php echo "Toplam ".'<strong>'.$this->db->count_all('news').'</strong>'." Haber Bulunmaktadır.";?></h5>
                </div>
                <div class="box-body text-center"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box warning">
                <div class="box-title">
                    <h3>Eğitmenler</h3>
                    <h5 class="block"><?php echo "Toplam ".'<strong>'.$this->db->count_all('trainers').'</strong>'." Eğitmen Bulunmaktadır.";?></h5>
                </div>
                <div class="box-body text-center"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box default">
                <div class="box-title">
                    <h3>Eğitimler</h3>
                    <h5 class="block"><?php echo "Toplam ".'<strong>'.$this->db->count_all('training').'</strong>'." Eğitim Bulunmaktadır.";?></h5>
                </div>
                <div class="box-body text-center"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="box success">
                <div class="box-title">
                    <h3>Toplam Etkinlik</h3>
                    <h5 class="block"><?php echo "Toplam ".'<strong>'.$this->db->count_all('activity').'</strong>'." Eğitim Bulunmaktadır.";?></h5>
                </div>
                <div class="box-body text-center"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="panel-2" class="panel panel-default">
                <div class="panel-heading">
                    <span class="title elipsis">
                        <strong>GENEL BİLGİLER</strong>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content transparent">
                        <div id="ttab1_nobg" class="tab-pane active">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Son İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#"><?php echo $news["title"];?></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><?php echo "Eğitmen ".$trainers["trainersName"]." Aramıza Katıldı";?></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><?php echo $training["title"]." Eğitimimiz Duyuruldu.";?></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><?php echo $activity["title"]."  Eğitimimiz Başladı";?></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>