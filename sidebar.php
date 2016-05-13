<?php
/**
 * User: Максим Руденко
 * Date: 10.03.2016
 * Сайдбар магазина
 */
?>
<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php //endif; ?>
<?php //if ( is_active_sidebar( 'shop_sidebar' ) ) :

    //dynamic_sidebar( 'shop_sidebar' );

//endif; ?>
<aside class="bi-sidebar">
    <h2 class="bi-title">Список сравнения</h2>
    <!-- Поле сравнения -->
    <div class="bi-ads-banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner1.jpg" alt="" height="230" width="274">
        <img src="<?php bloginfo('template_url'); ?>/images/banner2.jpg" alt="" height="259" width="274">
        <img src="<?php bloginfo('template_url'); ?>/images/banner3.jpg" alt="" height="360" width="274">
        <img src="<?php bloginfo('template_url'); ?>/images/banner1.jpg" alt="" height="230" width="274">
        <img src="<?php bloginfo('template_url'); ?>/images/banner2.jpg" alt="" height="259" width="274">
        <img src="<?php bloginfo('template_url'); ?>/images/banner3.jpg" alt="" height="360" width="274">
    </div>
</aside>