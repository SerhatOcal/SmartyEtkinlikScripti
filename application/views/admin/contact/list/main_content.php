<div id="content" class="padding-20">
<div id="panel-2" class="panel panel-default">
    <a class="btn btn-info btn-3d" href="<?php echo base_url("admin/new_contact"); ?>"><i class="fa fa-plus"></i></i> Yeni Ekle</a><br><br>
    <div class="panel-heading">
							<span class="title elipsis">
								<strong>ŞİRKET LİSTESİ</strong>
							</span>
        <ul class="options pull-right list-inline">
            <li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
            <li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
            <li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
        </ul>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover table-vertical-middle nomargin">
                <thead>
                <tr>
                    <th>K.No</th>
                    <th>Şirket Adı</th>
                    <th>Adres</th>
                    <th>E-Posta</th>
                    <th>Aktif/Pasif</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody class="sortableList">

                <?php foreach ($rows as $row) { ?>
                    <tr id="sortID-<?php echo $row->id;?>">
                        <td class="text-left"><?php echo $row->id;?></td>
                        <td class="text-left"><?php echo $row->title;?></td>
                        <td class="text-left"><?php echo $row->address;?></td>
                        <td class="text-left"><?php echo $row->email;?></td>
                        <td class="text-left">
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
                        <td>
                        <a data-toggle="tooltip" data-placement="top" data-original-title="Düzenle" href="<?php echo base_url("admin/edit_page_contact/$row->id");?>">
                            <i class="glyphicon glyphicon-edit"style="font-size: 24px;"></i>
                        </a>
                        <a class="removeBtn" data-toggle="tooltip" data-placement="top" data-original-title="Sil" dataURL="<?php echo base_url("admin/delete_contact/$row->id"); ?>">
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