<div id="content" class="padding-20">
    <div id="panel-1" class="panel panel-default">
        <a class="btn btn-info btn-3d" href="<?php echo base_url("admin/new_aboutus"); ?>"><i class="fa fa-plus"></i></i> Yeni Ekle</a><br><br>
        <div class="panel-heading">
							<span class="title elipsis">
								<strong>HAKKIMIZDA LİSTESİ</strong>
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
                        <th>Hakkımızda</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="sortableList" postUrl="admin/aboutusRankUpdate">

                    <?php foreach ($rows as $row) { ?>
                        <tr id="sortID-<?php echo $row->id;?>">
                            <td class="text-center" style="width: 50px"><?php echo $row->id;?></td>
                            <td>
                                <?php $strLen = strlen($row->aboutus); echo ($strLen < 5600) ? mb_substr($row->aboutus,0,1000) . "..." : $row->aboutus; ?>

                            </td>
                            <td style="width: 150px" class="text-center">
                                <a data-toggle="tooltip" data-placement="top" data-original-title="Düzenle" href="<?php echo base_url("admin/edit_page_aboutus/$row->id");?>">
                                    <i class="glyphicon glyphicon-edit"style="font-size: 24px;"></i>
                                </a>
                                <a class="removeBtn" data-toggle="tooltip" data-placement="top" data-original-title="Sil" dataURL="<?php echo base_url("admin/aboutus_delete/$row->id"); ?>">
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