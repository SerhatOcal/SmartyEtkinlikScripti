<div id="content" class="padding-20">
    <div id="panel-1" class="panel panel-default">
        <a class="btn btn-info btn-3d" href="<?php echo base_url("admin/new_email"); ?>"><i class="fa fa-plus"></i></i> Yeni Ekle</a><br><br>
        <div class="panel-heading">
							<span class="title elipsis">
								<strong>MAİL LİSTESİ</strong>
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
                        <th>Protokol</th>
                        <th>Host</th>
                        <th>Port</th>
                        <th>Kullanıcı</th>
                        <th>Kullanıcı Adı</th>
                        <th>Gönderen</th>
                        <th>Gönderilen</th>
                        <th>Aktif / Pasif</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="sortableList">

                    <?php foreach ($emailsettings as $row) { ?>
                        <tr id="sortID-<?php echo $row->id;?>">
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->protocol;?></td>
                            <td><?php echo $row->host;?></td>
                            <td><?php echo $row->port;?></td>
                            <td><?php echo $row->user;?></td>
                            <td><?php echo $row->userName;?></td>
                            <td><?php echo $row->from;?></td>
                            <td><?php echo $row->to;?></td>
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
                                <a data-toggle="tooltip" data-placement="top" data-original-title="Düzenle" href="<?php echo base_url("admin/edit_page_email/$row->id");?>">
                                    <i class="glyphicon glyphicon-edit"style="font-size: 24px;"></i>
                                </a>
                                <a class="removeBtn" data-toggle="tooltip" data-placement="top" data-original-title="Sil" dataURL="<?php echo base_url("admin/delete_email/$row->id"); ?>">
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

