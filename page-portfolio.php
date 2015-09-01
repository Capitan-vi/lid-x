<?php 
/*

Template name: Портфолио

*/
?>

<?php get_header(); ?>

	<?php the_post(); ?>
	<?php the_content(); ?>

	<!-- Портфолио темный блок -->
	<?php include 'blocks/portfolio-line/portfolio-line.php'; ?>
	
	<!-- Портфолио и кейсы -->
    <?php include 'blocks/portfolio-cases/portfolio-cases.php'; ?>

	<!-- Давайте добавим вам клиентов -->
	<?php include 'blocks/front-page/order/order.php'; ?>
	
	<?php //include 'blocks/add-clients/add-clients.php'; /* удалить этот блок - текущая версия в "order.php"  */ ?>

<?php get_footer(); ?>