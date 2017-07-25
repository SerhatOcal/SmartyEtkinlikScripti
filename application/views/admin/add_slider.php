<!doctype html>
<html lang="tr">
<head>
	<?php $this->load->view("admin/inculudes/head");?>
	<?php $this->load->view("admin/slider/add/page_style");?>
</head>
<body>
<div id="wrapper">
	<?php $this->load->view("admin/inculudes/sidebar");?>
	<?php $this->load->view("admin/inculudes/header");?>
	<section id="middle">
		<?php $this->load->view("admin/slider/add/breadcrumb");?>
		<?php $this->load->view("admin/slider/add/main_content");?>
	</section>
</div>
<?php $this->load->view("admin/inculudes/footer");?>
<?php $this->load->view("admin/slider/add/page_script");?>
</body>
</html>