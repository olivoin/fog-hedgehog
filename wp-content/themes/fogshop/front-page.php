<?php get_header(); ?>
<main id="front-page">
    <?php if(have_rows('баннер_вверху')): ?>
    <?php while(have_rows('баннер_вверху')): the_row(); ?>
    <section class="hello" style="background-image:url(<?php the_sub_field('фоновая_картинка'); ?>);">
        <div class="full-height">
            <div class="wrap hor-wrap text-center">
                <div class="hello-title wow hide fadeInDown"><?php the_sub_field('заголовок'); ?></div>
                <div class="hello-untitle wow hide fadeInUp">
                    <?php the_sub_field('текст'); ?>
                </div>
                <a href="<?php the_sub_field('ссылка'); ?>" class="button wow hide fadeInUp">начать покупки</a>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <section class="recent-products">
        <div class="wrap hor-wrap">
            <div class="recent-products-item col-2-6 padding-r-20">
                <?php if(have_rows('акционный_баннер_1')): ?>
                <?php while(have_rows('акционный_баннер_1')): the_row(); ?>
                <a href="<?php the_sub_field('ссылка'); ?>">
                    <div class="recent-products-item-wrap dis-flex align-item-end" style="background-image:url(<?php the_sub_field('картинка'); ?>);">
                        <div class="recent-products-item-wrap-desc">
                            <h3><?php the_sub_field('заголовок'); ?></h3>
                            <p><?php the_sub_field('описание'); ?></p>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="recent-products-item col-2-6 padding-r-20">
                <?php if(have_rows('акционный_баннер_2')): ?>
                <?php while(have_rows('акционный_баннер_2')): the_row(); ?>
                <a href="<?php the_sub_field('ссылка'); ?>">
                    <div class="recent-products-item-wrap dis-flex align-item-end" style="background-image:url(<?php the_sub_field('картинка'); ?>);">
                        <div class="recent-products-item-wrap-desc">
                            <h3><?php the_sub_field('заголовок'); ?></h3>
                            <p><?php the_sub_field('описание'); ?></p>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="recent-products-item col-2-6">
                <?php if(have_rows('акционный_баннер_3')): ?>
                <?php while(have_rows('акционный_баннер_3')): the_row(); ?>
                <a href="<?php the_sub_field('ссылка'); ?>">
                    <div class="recent-products-item-wrap dis-flex align-item-end" style="background-image:url(<?php the_sub_field('картинка'); ?>);">
                        <div class="recent-products-item-wrap-desc">
                            <h3><?php the_sub_field('заголовок'); ?></h3>
                            <p><?php the_sub_field('описание'); ?></p>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="recent-products-item col-4-6 padding-r-20 padding-t-20">
                <?php if(have_rows('акционный_баннер_4')): ?>
                <?php while(have_rows('акционный_баннер_4')): the_row(); ?>
                <a href="<?php the_sub_field('ссылка'); ?>">
                    <div class="recent-products-item-wrap dis-flex align-item-end" style="background-image:url(<?php the_sub_field('картинка'); ?>);">
                        <div class="recent-products-item-wrap-desc">
                            <h3><?php the_sub_field('заголовок'); ?></h3>
                            <p><?php the_sub_field('описание'); ?></p>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div style="clear:both;"></div>
        </div>
    </section>
    <section class="product-new">
        <div class="wrap hor-wrap">
            <div class="section-title">
                <h2>Распродажа</h2>
            </div>
            <?php echo do_shortcode('[sale_products per_page="3"]'); ?>
            <div class="text-center">
                <a href="http://fog-hedgehog.ru/katalog/" class="button">смотреть все</a>
            </div>
        </div>
    </section>
    <section class="product-new">
        <div class="wrap hor-wrap">
            <div class="section-title">
                <h2>Новые поступления</h2>
            </div>
            <?php echo do_shortcode('[recent_products per_page="3"]'); ?>
            <div class="text-center">
                <a href="http://fog-hedgehog.ru/katalog/" class="button">смортеть все</a>
            </div>
        </div>
    </section>
    <section class="section-bg">
        <div class="full-height">
            <div class="wrap hor-wrap dis-flex flex-wrap-wrap justify-content-end">
                <div class="col-2-6 text-block text-center">
                    <h2 class="color-white">Нас выбирают более 500 вейперов</h2>
                    <p>Потому что мы все бро, и ты тоже бро, не вижу причин не выбрать, так что камон за своим девайсом, бро.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-subscribe">
        <div class="wrap hor-wrap dis-flex flex-wrap-wrap justify-content-center">
            <div class="col-3-6 text-block text-center">
                <div class="section-title margin-b-30">
                    <h2>Подпишись на обновления</h2>
                </div>
                <p>наш магазин ежедневно пополняет ассортимент товаров, и чтобы не пропустить ни одного, мы предлагнаем вам подписаться на новости о поступлениях. Обещаем, мы не будем доставать Вас рассылкой.)</p>
                <div class="margin-t-24">
                    <input type="text" placeholder="Введите Ваш e-mail">
                    <input type="button" value="подписаться" class="button margin-t-20">
                </div>
            </div>
        </div>
    </section>
    <section class="page-content text-block">
        <div class="wrap hor-wrap dis-flex flex-wrap-wrap">
            <div class="col-5-6">
                <?php the_content(); ?>
            </div>
            <div class="col-1-6" style="
                 background-color:#F5F6FA;
                 background-image: -webkit-repeating-radial-gradient(center center, #C0AA61, #C0AA61 1px, transparent 1px, transparent 100%);
                 background-size: 5px 5px;
            "></div>
        </div>
    </section>
</main>
<?php get_footer(); ?>