<div id="content" class="padding-20">
    <div id="panel-1" class="panel panel-default">
        <a class="btn btn-info btn-3d" href="<?php echo base_url("admin/new_news"); ?>"><i class="fa fa-plus"></i></i> Yeni Ekle</a><br><br>
        <div class="panel-heading">
							<span class="title elipsis">
								<strong>HABER LİSTESİ</strong>
							</span>
            <ul class="options pull-right list-inline">
                <li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
                <li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
                <li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-vertical-middle nomargin">
                    <thead>
                    <tr>
                        <th class="text-center">S.No</th>
                        <th class="text-center">Resim</th>
                        <th class="text-center">Başlık</th>
                        <th class="text-center">Açıklama</th>
                        <th class="text-center">Bağlantı</th>
                        <th class="text-center">Tarih</th>
                        <th class="text-center">Açık / Kapalı</th>
                        <th class="text-center">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="sortableList" postUrl="admin/newsRankUpdate">

                    <?php foreach ($rows as $row) { ?>
                        <tr id="sortID-<?php echo $row->id;?>">
                            <td class="text-center" width="20"><?php echo $row->id;?></td>
                            <td class="text-center">
                                <a class="thumbnail test-popup-link" rel="ligthbox"
                                   href="<?php echo (is_file("uploads/news/$row->image"))? base_url("uploads/news") . "/" . $row->image : base_url("uploads/defaultimg/news_default_image.jpg") ?>">
                                    <img src="<?php
                                    if(is_file("uploads/news/$row->image")){
                                        echo base_url("uploads/news/$row->image");
                                    }
                                    else{
                                        echo base_url("uploads/defaultimg/news_default_image.jpg");
                                    }?>" alt="<?php echo $row->image; ?>">
                                </a>

                            </td>
                            <td class="text-center" width="250"><?php echo $row->title;?></td>
                            <td class="text-center" width="250">
                                <?php $strLen = strlen($row->detail); echo ($strLen > 250) ? mb_substr($row->detail,0,150) . "..." : $row->detail; ?>
                            </td>
                            <td class="text-center"><?php echo $row->weblink;?></td>
                            <td class="text-center" width="150"><?php echo $row->date;?></td>
                            <td class="text-center" width="140">
                                <input class = "toggle_check"
                                       data-onstyle="success"
                                       data-size = "mini"
                                       data-on="Aktif"
                                       data-off="Pasif"
                                       data-offstyle="danger"
                                       type="checkbox"
                                       data-toggle="toggle"
                                       dataID="<?php echo $row->id; ?>"
                                    <?php echo ($row->isActive == 1) ? "checked" : ""; ?>
                                >
                            </td>
                            <td class="text-center" width="40">
                                <a data-toggle="tooltip" data-placement="top" data-original-title="Düzenle" href="<?php echo base_url("admin/edit_page_news/$row->id");?>">
                                    <i class="glyphicon glyphicon-edit"style="font-size: 24px;"></i>
                                </a>
                                <a class="removeBtn" data-toggle="tooltip" data-placement="top" data-original-title="Sil" dataURL="<?php echo base_url("admin/news_delete/$row->id"); ?>">
                                    <i class="glyphicon glyphicon-remove-circle"style="font-size: 24px;"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

