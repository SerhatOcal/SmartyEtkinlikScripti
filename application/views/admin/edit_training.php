<!doctype html>
<html lang="tr">
<head>
	<?php $this->load->view("admin/inculudes/head");?>
	<?php $this->load->view("admin/training/edit/page_style");?>
</head>
<body>
<div id="wrapper">
	<?php $this->load->view("admin/inculudes/sidebar");?>
	<?php $this->load->view("admin/inculudes/header");?>
	<section id="middle">
		<?php $this->load->view("admin/training/edit/breadcrumb");?>
		<?php $this->load->view("admin/training/edit/main_content");?>
	</section>
</div>
<?php $this->load->view("admin/inculudes/footer");?>
<?php $this->load->view("admin/training/edit/page_script");?>
</body>
</html>