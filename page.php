<?php get_header();?>

<div class="bi-main-content">
	<?php if(!is_single()):?>
		<h2 class="bi-title"><?php the_title(); ?></h2>
	<?php endif; ?>
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
