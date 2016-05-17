<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php
		$theme_path_uri = get_template_directory_uri();
		//$options = tf_variable_exist(get_option( 'theme_settings' ));
	?>

	<?php //if(isset($options['favicon']) && $options['favicon'] != ''):?>
	<?php //$favicon_url = wp_get_attachment_image_url( $options['favicon'], 'full' ); ?>
    
	<!--<link rel="icon" type="image/vnd.microsoft.icon" href="<?php //echo esc_url($favicon_url);?>">-->
	<?php //endif;?>


    <!-- style start -->

	<link rel="stylesheet" href="<?php echo esc_url($theme_path_uri); ?>/css/style.css">

	<!-- style end -->

	<?php wp_head(); ?>
	

</head>
<body>

<header class="bi-header">
    <div class="bi-header-wrapp">
        <div class="container">
            <div class="bi-logo">
                LOGO
            </div>
            <div class="bi-header-wrapp__right">
                <div class="bi-exchange">
                <?php
                    $ex_rates = new EX_rates();
                    var_dump($ex_rates-> coursesInArray());
                ?>
                </div>
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
    </div>  
    <nav class="bi-main-nav">
        <div class="container">
            <ul class="bi-main-nav__list">
                <?php wp_nav_menu(array('menu' => 'bi-nav_head', 'menu_class' => 'bi-nav_head')); ?>
            </ul>
        </div>
    </nav>
</header>
<section class="bi-banner-rewievs">
    <div class="container">
        <div class="bi-banner-wrapp">
            <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="banner" height="138" width="862">
        </div>
        <div class="bi-rewievs">
            <h2 class="bi-rewievs__title">Последние отзывы</h2>
            <!-- slider rewievs-->
        </div>
    </div>
</section>
<section class="bi-main">
    <div class="container">
        <div class="flex-wrap">