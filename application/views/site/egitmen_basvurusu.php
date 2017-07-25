<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <?php $this->load->view("site/inculude/head");?>
<body class="smoothscroll enable-animation">
<div id="wrapper">
    <?php $this->load->view("site/inculude/header");?>
    <?php $this->load->view("site/egitmen_basvurusu/breadcrumb");?>
    <?php $this->load->view("site/egitmen_basvurusu/main_content");?>
</div>
<a href="#" id="toTop"></a>
<?php $this->load->view("site/inculude/footer");?>
</body>
</html>