<?php
/*

Template name: Главная

*/
?>

<?php get_header(); ?>


  <!-- Баннер с персонажем -->
  <?php  include 'blocks/main-promo/main-promo.php'; ?>
  <!-- Портфолио и кейсы -->
  <?php    include 'blocks/portfolio-cases/portfolio-cases.php'; ?>
  <?php    include 'blocks/front-page/tablet-proove/tablet-proove.php'; ?>
  <?php    include 'blocks/front-page/quality/quality.php'; ?>
  <?php    include 'blocks/front-page/future-slogan/future-slogan.php'; ?>
  <?php    include 'blocks/front-page/steps/steps.php'; ?>
  <?php    include 'blocks/front-page/workflow/workflow.php'; ?>
  <?php    include 'blocks/front-page/changes/changes.php'; ?>
  <?php    include 'blocks/front-page/reduce-advertising-cost/reduce-advertising-cost.php'; ?>
  <?php    include 'blocks/front-page/order/order.php'; ?>

	<!-- Мне нужны клиенты -->
	<?php //include 'blocks/want-clients/want-clients.php'; ?>

	<!-- Как мы делаем эффективную рекламу -->
	<?php // include 'blocks/steps-promo/steps-promo.php'; ?>

	<!-- Хочу консультацию -->
	<?php //include 'blocks/want-consultation/want-consultation.php'; ?>

	<!-- Давайте добавим вам клиентов -->
	<?php //  include 'blocks/add-clients/add-clients.php'; ?>

<?php get_footer(); ?>
