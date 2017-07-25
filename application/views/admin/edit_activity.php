<!doctype html>
<html lang="tr">
<head>
	<?php $this->load->view("admin/inculudes/head");?>
</head>
<body>
<div id="wrapper">
	<?php $this->load->view("admin/inculudes/sidebar");?>
	<?php $this->load->view("admin/inculudes/header");?>
	<section id="middle">
		<?php $this->load->view("admin/activity/edit/breadcrumb");?>
		<?php $this->load->view("admin/activity/edit/main_content");?>
	</section>
</div>
<?php $this->load->view("admin/inculudes/footer");?>
</body>
</html>