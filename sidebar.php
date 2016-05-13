<?php
/**
 * User: Максим Руденко
 * Date: 10.03.2016
 * Сайдбар магазина
 */
?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
<?php if ( is_active_sidebar( 'shop_sidebar' ) ) :

    dynamic_sidebar( 'shop_sidebar' );

endif; ?>
<style>
.topnav {

}
ul.topnav {
font-size: 1em;
line-height: 0.5em;
list-style: none outside none;
margin: 0;
padding: 0;
    width: 100%;
}
ul.topnav li {
}
ul.topnav li a {
    box-shadow: 0 1px 0 0 rgba(250, 250, 250, 0.1) inset;
    display: block;
    outline: 0;
    padding: .7em 1em;
    text-decoration: none;
    color: #666666;
    font-weight: normal;
    border-bottom: 1px solid #666666;
    cursor: pointer;
}
ul.topnav li a:hover {
    color: #9dc808;
}
ul.topnav ul {
display: none;
margin: 0;
padding: 0;
}
ul.topnav ul li {
clear: both;
margin: 0;
padding: 0;
}
ul.topnav ul li a {
font-size: 14px;
font-weight: normal;
outline: 0 none;
padding-left: 20px;
line-height: 16px;
}
ul.topnav ul ul li a {
padding-left: 40px;
}
ul.topnav span {
font-size: 18px;
float: right;
}
</style>
<aside class="left-sidebar">
			<div class="left-sidebar__menu">
                <?php penguin_woocommerce_cat_tree_view(); ?>

			</div>
			<div class="filter">

                <form method="get" action="<?php  echo get_site_url().'/catalogue/'; ?>">
                    <p>Цена</p>
                    <div class="price-loop-wrapp">
                        <label>от<input type="text" name="filter_price_from" value="<?php echo esc_attr( isset($_GET['filter_price_from'])?$_GET['filter_price_from']:0 ); ?>"></label>
                        <label>до<input type="text" name="filter_price_to" value="<?php echo esc_attr( isset($_GET['filter_price_to'])?$_GET['filter_price_to']:0 ); ?>"></label>
                    </div>

                    <select class="choice-drop" name="filter_manufacturer">
                        <?php echo manufacturer_list_view_frontend(isset($_GET['filter_manufacturer'])?$_GET['filter_manufacturer']:'' ); ?>
                    </select>

                    <input type="submit" value="Отфильтровать">
                </form>


            </div>
		</aside>