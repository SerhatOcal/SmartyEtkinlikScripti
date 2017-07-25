<!doctype html>
<html lang="tr">
<head>
	<?php $this->load->view("admin/inculudes/head");?>
	<?php $this->load->view("admin/referans/list/page_style");?>
</head>
<body>
<div id="wrapper">
	<?php $this->load->view("admin/inculudes/sidebar");?>
	<?php $this->load->view("admin/inculudes/header");?>
	<section id="middle">
		<?php $this->load->view("admin/referans/list/breadcrumb");?>
		<?php $this->load->view("admin/referans/list/main_content");?>
	</section>
</div>
<?php $this->load->view("admin/inculudes/footer");?>
<?php $this->load->view("admin/referans/list/page_script");?>
</body>
</html>