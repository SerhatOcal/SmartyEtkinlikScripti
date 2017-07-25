<!doctype html>
<html lang="tr">
<head>
	<?php $this->load->view("admin/inculudes/head");?>
</head>
<body>
<div id="wrapper">
	<?php $this->load->view("admin/inculudes/sidebar");?>
	<?php $this->load->view("admin/inculudes/header");?>
	<!--MIDDLE-->
	<section id="middle">
		<?php $this->load->view("admin/aboutus/edit/breadcrumb");?>
		<?php $this->load->view("admin/aboutus/edit/main_content");?>
	</section>
</div>
<?php $this->load->view("admin/inculudes/footer");?>
<?php $this->load->view("admin/aboutus/edit/page_script");?>
</body>
</html>