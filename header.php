<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lid-X – больше денег из интернета</title>

	<!--link rel="stylesheet" href="<?php  bloginfo("template_directory"); ?>/css/style.css"-->

	<!--link rel="stylesheet" href="<?php  bloginfo("template_directory"); ?>/css/adaptive.css"-->

	<script src="<?php  bloginfo("template_directory"); ?>/js/jquery-1.11.2.min.js"></script>

	<script src="<?php  bloginfo("template_directory"); ?>/js/js.js"></script>
	<script src="<?php  bloginfo("template_directory"); ?>/js/custom-js.js"></script>
	<script src="<?php  bloginfo("template_directory"); ?>/js/main.js"></script>
	<script src="<?php  bloginfo("template_directory"); ?>/js/vendor.js"></script>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64732009-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</head>
<body>
	<header class="header">
		<div class="wrapper">
			<div class="page__contacts">
				<!-- <a href="" class="header-order-call" id="js-header-order-call">Заказать звонок</a> -->
				<a href="tel:+78129306319" rel="nofollow" class="phone-number phone-number--header">+7 812 930-63-19</a>
			</div>
			<h1 class="page__logo">
				<a href="/">
					<img src="<?php  bloginfo("template_directory"); ?>/img/header-logo-img.png" alt="">
				</a>
			</h1>
			<p class="header__description">больше клиентов из интернета</p>
			<nav>
				<label for="header-nav-checkbox" class="header__nav-checkbox"></label>
				<input type="checkbox" id="header-nav-checkbox" class="header__nav-checkbox">
				<?php wp_nav_menu('primary'); ?>
			</nav>
		</div>
	</header>