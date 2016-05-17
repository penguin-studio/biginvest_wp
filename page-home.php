<?php
/*
Template Name: Шаблон главной страницы
*/
?>

<?php get_header();?>

<div class="bi-main-content">
	<?php
    	get_template_part('content/content-home');
    ?>
    <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();?>
			<?php the_content(); ?>
	<?php
		endwhile;
	endif;
	?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
