<div id="content" class="padding-20">
    <div id="panel-1" class="panel panel-default">
        <a class="btn btn-info btn-3d" href="<?php echo base_url("admin/new_trainers"); ?>"><i class="fa fa-plus"></i></i> Yeni Ekle</a><br><br>
        <div class="panel-heading">
							<span class="title elipsis">
								<strong>ETKİNLİK KATEGORİ LİSTESİ</strong>
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
                        <th>S.No</th>
                        <th>Resim</th>
                        <th>Eğitmen Adı</th>
                        <th>Hakkında</th>
                        <th>Açık / Kapalı</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="sortableList" postUrl="admin/trainersRankUpdate">

                    <?php foreach ($rows as $row) { ?>
                        <tr id="sortID-<?php echo $row->id;?>">
                            <td class="text-center" style="width: 50px"><?php echo $row->id;?></td>
                            <td class="text-center" width="80">

                                <a class="thumbnail test-popup-link" rel="ligthbox"
                                   href="<?php echo (is_file("uploads/trainers/$row->image"))? base_url("uploads/trainers") . "/" . $row->image : base_url("uploads/defaultimg/trainers_default_image.jpg") ?>">
                                    <img src="<?php
                                    if(is_file("uploads/trainers/$row->image")){
                                        echo base_url("uploads/trainers/$row->image");
                                    }
                                    else{
                                        echo base_url("uploads/defaultimg/trainers_default_image.jpg");
                                    }?>" alt="<?php echo $row->image; ?>">
                                </a>

                            </td>
                            <td><?php echo $row->trainersName;?></td>
                            <td><?php $strLen = strlen($row->detail); echo ($strLen > 1000) ? mb_substr($row->detail,0,500) . "..." : $row->detail; ?>
                            </td>
                            <td class="text-center" style="width: 150px">
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
                            <td style="width: 150px" class="text-center">
                                <a data-toggle="tooltip" data-placement="top" data-original-title="Düzenle" href="<?php echo base_url("admin/edit_page_trainers/$row->id");?>">
                                    <i class="glyphicon glyphicon-edit"style="font-size: 24px;"></i>
                                </a>
                                <a class="removeBtn" data-toggle="tooltip" data-placement="top" data-original-title="Sil" dataURL="<?php echo base_url("admin/trainers_delete/$row->id"); ?>">
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
</div>
