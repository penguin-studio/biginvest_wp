<!--<?php //$options = tf_variable_exist(get_option( 'theme_settings' )); ?>-->



		</div>
	</div>
</section>
<footer class="bi-footer">
	<div class="container">
		<nav class="bi-main-nav">
			<ul class="bi-main-nav__list">
				<?php wp_nav_menu(array('menu' => 'bi-nav_footer', 'menu_class' => 'bi-nav_footer')); ?>
			</ul>
		</nav>
		<div class="bi-header-wrapp__right">
			<nav class="bi-social">
				<ul class="bi-social__list">
					<li><a class="icon-vk" href="#"></a></li>
					<li><a class="icon-youtube" href="#"></a></li>
					<li><a class="icon-twitter" href="#"></a></li>
					<li><a class="icon-facebook" href="#"></a></li>
				</ul>
			</nav>
		</div>
	</div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>

<?php wp_footer(); ?>
</body>
</html>
