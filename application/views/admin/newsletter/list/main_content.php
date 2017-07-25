<div id="content" class="padding-20">
    <div id="panel-1" class="panel panel-default">
        <a class="btn btn-info btn-3d" href="<?php echo base_url("admin/new_newsletter"); ?>"><i class="fa fa-plus"></i></i> Yeni Ekle</a><br><br>
        <div class="panel-heading">
							<span class="title elipsis">
								<strong>ABONE LİSTESİ</strong>
							</span>
            <ul class="options pull-right list-inline">
                <li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
                <li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
                <li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
            </ul>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover" id="sample_5">
                <thead>
                <tr>
                    <th>Sıra No</th>
                    <th>E-Posta Adresi</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row) { ?>
                    <tr id="sortID-<?php echo $row->id;?>">
                        <td class="text-center" style="width: 70px"><?php echo $row->id;?></td>
                        <td><?php echo $row->email;?></td>
                        <td>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Düzenle" href="<?php echo base_url("admin/edit_page_newsletter/$row->id");?>">
                                <i class="glyphicon glyphicon-edit"style="font-size: 24px;"></i>
                            </a>
                            <a class="removeBtn" data-toggle="tooltip" data-placement="top" data-original-title="Sil" dataURL="<?php echo base_url("admin/delete_newsletter/$row->id"); ?>">
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

