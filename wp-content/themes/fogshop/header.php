<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="yandex-verification" content="ac85ef401c21509e" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<meta name="Keywords" content="<?php the_field('ключевые_слова'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" class="wow hide fadeIn">
    <div class="header-top dis-flex align-items-center justify-content-between">
        <nav class="header-nav relative">
            <?php echo do_shortcode('[widget id="nav_menu-3"]'); ?>
        </nav>
        <div class="header-title">
            <a href="/">Fog Hedgehog</a>
        </div>
        <div class="header-add relative">
            <ul class="dis-flex align-items-center">
                <!--<li>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/header/user.svg" class="svg"></a>
                </li>-->
                <li>
                    <?php echo do_shortcode('[widget id="yith_woocommerce_ajax_search-2"]'); ?>
                </li>
                <li class="header-cart">
                    <?php global $woocommerce; ?>
                    <a class="cart-contents" href="/cart" title="Посмотреть Вашу корзину">
                        <div class="cart-count"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'),$woocommerce->cart->cart_contents_count);?></div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/header/cart.svg" class="svg">
                    </a> 
                </li>
            </ul>
        </div>
        <div class="mobile-bar">
            <button type="button" class="tcon tcon-menu--minus" aria-label="toggle menu">
                <span class="tcon-menu__lines" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    <div class="header-katalog">
        <nav class="header-katalog-nav">
            <?php echo do_shortcode('[widget id="nav_menu-4"]'); ?>
        </nav>
    </div>
</header>
<div class="scroll-top">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/up.svg" class="svg">
</div>