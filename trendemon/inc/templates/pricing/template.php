<?php

/**
 * [Template] pricing
 */

get_header();
while (have_posts()) : the_post();
?>


    <main class="pricing">

        <?php $cover = get_field('cover'); ?>
        <section class="pricing-cover  <?= $cover['allow_special_pricing'] ? 'specials' : ''; ?>">
            <div class="container">
                <div class="pricing-cover__inner">
                    <img class="pricing-cover__img" src="<?= $cover['header_image']['url']; ?>" alt="<?= $cover['header_image']['alt']; ?>" />
                    <div class="pricing-cover__pre_title"><?= $cover['header_pre_title']; ?></div>
                    <?php if (isset($cover['title']) && $cover['title']) { ?>
                        <h1 class="pricing-cover__title"><?= $cover['title']; ?></h1>
                    <?php } ?>

                    <div class="pricing-cover__wrapper">
                        <div class="pricing-cover__cards_title"><?= $cover['pricing_table_title']; ?></div>
                        <div class="pricing-cover__cards">

                            <?php if (isset($cover['cards']) && $cover['cards']) { ?>
                                <?php foreach ($cover['cards'] as $card) : ?>

                                    <a href="<?= $card['link']; ?>" <?php if (isset($card['new_tab']) && $card['new_tab']) { ?>target="_blank" <?php } ?> class="pricing-cover__cardsItem" data-card-theme="white" data-card-style="<?= $card['style']; ?>">
                                        <header class="pricing-cover__cardsItem-header">
                                            <h3 class="pricing-cover__cardsItem-subtitle"><?= $card['title']; ?></h3>
                                            <h2 class="pricing-cover__cardsItem-title <?= $card['special_subtitle'] ? 'raised' : 'cost'; ?>"><?= $card['subtitle']; ?></h2>
                                            <?php if ($card['special_subtitle'] && $cover['allow_special_pricing']) { ?>
                                                <h2 class="pricing-cover__cardsItem-title special_pricing"><?= $card['special_subtitle']; ?></h2>
                                            <?php } ?>
                                        </header>

                                        <?php if (isset($card['button_text']) && $card['button_text']) { ?>
                                            <span class="pricing-cover__cardsItem-button button-solid-pink"><?= $card['button_text']; ?></span>
                                        <?php } ?>

                                        <?php if (isset($card['features']) && $card['features']) { ?>
                                            <ul class="pricing-cover__cardsItem-list">
                                                <?php foreach ($card['features'] as $item) : ?>

                                                    <?php if (isset($item['feature']) && $item['feature']) { ?>
                                                        <li><?= $item['feature']; ?></li>
                                                    <?php } ?>

                                                <?php endforeach; ?>
                                            </ul>
                                        <?php } ?>

                                        <?php if (isset($card['text']) && $card['text']) { ?>
                                            <div class="pricing-cover__cardsItem-text">
                                                <?= $card['text']; ?>
                                            </div>
                                        <?php } ?>
                                    </a>

                                <?php endforeach; ?>
                            <?php } ?>

                        </div>


                        <div class="pricing-cover__cta">
                            <?php if (isset($cover['cta']['title']) && $cover['cta']['title']) { ?>
                                <h2 class="pricing-cover__cta-title"><?= $cover['cta']['title']; ?></h2>
                            <?php } ?>

                            <?php if (isset($cover['cta']['button']['url']) && $cover['cta']['button']['url']) { ?>
                                <a class="pricing-cover__cta-button" href="<?= $cover['cta']['button']['url']; ?>" <?php if (isset($cover['cta']['button']['target']) && $cover['cta']['button']['target']) { ?>target="<?= $cover['cta']['button']['target']; ?>" <?php } ?>><?= $cover['cta']['button']['title']; ?></a>
                            <?php } ?>

                            <?php if (isset($cover['cta']['subtitle']) && $cover['cta']['subtitle']) { ?>
                                <h3 class="pricing-cover__cta-subtitle"><?= $cover['cta']['subtitle']; ?></h3>
                            <?php } ?>

                            <?php if (isset($cover['cta']['list']) && $cover['cta']['list']) { ?>
                                <ul class="pricing-cover__cta-text">
                                    <?php foreach ($cover['cta']['list'] as $item) : ?>

                                        <?php if (isset($item['text']) && $item['text']) { ?>
                                            <li><?= $item['text']; ?></li>
                                        <?php } ?>

                                    <?php endforeach; ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>

                    <?php if (isset($cover['cta']['text']) && $cover['cta']['text']) { ?>
                        <div class="pricing-cover__text">
                            <?= $cover['cta']['text']; ?>
                        </div>
                    <?php } ?>

                    <?php if (isset($cover['more_text']) && $cover['more_text']) { ?>
                        <div class="pricing-contact">
                            <?= $cover['more_text']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>


        <?php $awards = get_field('awards'); ?>
        <section class="pricing-awards">
            <div class="container">
                <div class="pricing-awards__inner">
                    <?php if (isset($awards['title']) && $awards['title']) { ?>
                        <h2 class="pricing-awards__title"><?= $awards['title']; ?></h2>
                    <?php } ?>

                    <div class="pricing-awards__list">
                        <?php if (isset($awards['list']) && $awards['list']) { ?>
                            <?php foreach ($awards['list'] as $item) : ?>
<!--                                --><?php //if (isset($item['html_code']) && $item['html_code']) { ?>
<!--                                    <div class="pricing-awards__listItem">-->
<!--                                        --><?php //= $item['html_code']; ?>
<!--                                    </div>-->
<!--                                --><?php //} ?>
                                <?php if (isset($item['awards_image']) && $item['awards_image']) { ?>
                                    <img class="pricing-awards__image" src="<?= $item['awards_image']['url']?>" alt="<?= $item['awards_image']['alt']?>" title="<?= $item['awards_image_title']?>">
                                <?php } ?>
                            <?php endforeach; ?>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </section>

        <?php $logos = get_field('logos'); ?>
        <section class="pricing-logos">
            <!-- <div class="container"> -->
            <div class="pricing-logos__inner">

                <?php if (isset($logos['title']) && $logos['title']) { ?>
                    <h2 class="pricing-logos__title"><?= $logos['title']; ?></h2>
                <?php } ?>

                <div class="pricing-logos__list">
                    <?php if (isset($logos['list']) && $logos['list']) { ?>
                        <?php foreach ($logos['list'] as $item) : ?>

                            <?php if (isset($item['image']['url']) && $item['image']['url']) { ?>
                                <div class="pricing-logos__listItem">
                                    <img class="no-lazyload" src="<?= $item['image']['url']; ?>" <?php if (isset($item['image2x']['url']) && $item['image2x']['url']) { ?>srcset="<?= $item['image2x']['url']; ?> 2x" <?php } ?> alt="<?= $item['image']['alt']; ?>">
                                </div>
                            <?php } ?>

                        <?php endforeach; ?>
                    <?php } ?>
                </div>

            </div>
            <!-- </div> -->
        </section>

        <?php $reviews = get_field('reviews'); ?>
        <section class="pricing-reviews">
            <div class="container">
                <div class="pricing-reviews__inner">

                    <?php if (isset($reviews['title']) && $reviews['title']) { ?>
                        <h2 class="pricing-reviews__title"><?= $reviews['title']; ?></h2>
                    <?php } ?>

                    <div class="pricing-reviews__slider-wrapper">

                        <div class="pricing-reviews__slider">
                            <div class="swiper-wrapper">

                                <?php if (isset($reviews['list']) && $reviews['list']) { ?>
                                    <?php foreach ($reviews['list'] as $item) : ?>

                                        <div class="pricing-reviews__slide swiper-slide">
                                            <div class="pricing-reviews__slide-author">

                                                <div class="pricing-reviews__slide-image">
                                                    <?php if ($item['author_avatar'] == 'monogram') { ?>
                                                        <?php if (isset($item['author_monogram']) && $item['author_monogram']) { ?>
                                                            <div class="monogram"><?= $item['author_monogram']; ?></div>
                                                        <?php } ?>
                                                    <?php } ?>

                                                    <?php if ($item['author_avatar'] == 'image') { ?>
                                                        <?php if (isset($item['author_image']['url']) && $item['author_image']['url']) { ?>
                                                            <img class="no-lazyload" src="<?= $item['author_image']['url']; ?>" <?php if (isset($item['author_image2x']['url']) && $item['author_image2x']['url']) { ?>srcset="<?= $item['author_image2x']['url']; ?> 2x" <?php } ?> alt="<?= $item['author_image']['alt']; ?>">
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>

                                                <?php if (isset($item['author_name']) && $item['author_name']) { ?>
                                                    <div class="pricing-reviews__slide-name"><?= $item['author_name']; ?></div>
                                                <?php } ?>

                                                <?php if (isset($item['author_position']) && $item['author_position']) { ?>
                                                    <div class="pricing-reviews__slide-position"><?= $item['author_position']; ?></div>
                                                <?php } ?>
                                            </div>

                                            <div class="pricing-reviews__slide-content">
                                                <?php if (isset($item['title']) && $item['title']) { ?>
                                                    <div class="pricing-reviews__slide-title"><?= $item['title']; ?></div>
                                                <?php } ?>

                                                <div class="pricing-reviews__slide-rating">
                                                    <?php if (isset($item['stars']) && $item['stars']) { ?>
                                                        <div class="pricing-reviews__slide-stars">
                                                            <?php pricing_rating_get_stars($item['stars']); ?>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if (isset($item['date']) && $item['date']) { ?>
                                                        <div class="pricing-reviews__slide-date"><?= $item['date']; ?></div>
                                                    <?php } ?>
                                                </div>

                                                <div class="pricing-reviews__slide-quote">
                                                    <?php if (isset($item['quote']) && $item['quote']) { ?>
                                                        <q><?= $item['quote']; ?></q>
                                                    <?php } ?>
                                                </div>

                                                <?php if (isset($item['more_link']['url']) && $item['more_link']['url']) { ?>
                                                    <div class="pricing-reviews__slide-moreWrapper">
                                                        <a href="<?= $item['more_link']['url']; ?>" <?php if (isset($item['more_link']['target']) && $item['more_link']['target']) { ?>target="<?= $item['more_link']['target']; ?>" <?php } ?>><?= $item['more_link']['title']; ?></a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                <?php } ?>

                            </div>
                        </div>

                        <div class="swiper-pagination"></div>

                    </div>

                </div>
            </div>
        </section>

        <?php $cta = get_field('cta'); ?>
        <section class="pricing-cta">
            <div class="container">
                <a href="<?= $cta['link']; ?>" <?php if (isset($cta['new_tab']) && $cta['new_tab']) { ?>target="_blank" <?php } ?> class="pricing-cta__inner">
                    <?php if (isset($cta['title']) && $cta['title']) { ?>
                        <h2 class="pricing-cta__title"><?= $cta['title']; ?></h2>
                    <?php } ?>

                    <div class="pricing-cta__content">
                        <?php if (isset($cta['subtitle']) && $cta['subtitle']) { ?>
                            <h3 class="pricing-cta__subtitle"><?= $cta['subtitle']; ?></h3>
                        <?php } ?>

                        <?php if (isset($cta['list']) && $cta['list']) { ?>
                            <ul class="pricing-cta__text">
                                <?php foreach ($cta['list'] as $item) : ?>

                                    <?php if (isset($item['text']) && $item['text']) { ?>
                                        <li><?= $item['text']; ?></li>
                                    <?php } ?>

                                <?php endforeach; ?>
                            </ul>
                        <?php } ?>
                    </div>

                    <?php if (isset($cta['button_text']) && $cta['button_text']) { ?>
                        <span class="pricing-cta__button"><?= $cta['button_text']; ?></span>
                    <?php } ?>
                </a>
            </div>
        </section>

        <?php $faqs = get_field('faqs'); ?>
        <section class="pricing-faqs">
            <div class="container">
                <div class="pricing-faqs__inner">
                    <?php if (isset($faqs['title']) && $faqs['title']) { ?>
                        <h2 class="pricing-faqs__title"><?= $faqs['title']; ?></h2>
                    <?php } ?>

                    <?php if (isset($faqs['list']) && $faqs['list']) { ?>
                        <div class="pricing-faqs__list">
                            <?php foreach ($faqs['list'] as $item) : ?>

                                <div class="pricing-faqs__listItem">
                                    <div class="pricing-faqs__listItem-header">
                                        <h3 class="pricing-faqs__listItem-title"><?= $item['question']; ?></h3>
                                    </div>

                                    <div class="pricing-faqs__listItem-content">
                                        <?= $item['answer']; ?>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    <?php } ?>

                    <?php if (isset($faqs['more_text']) && $faqs['more_text']) { ?>
                        <div class="pricing-contact">
                            <?= $faqs['more_text']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

    </main>


<?php
endwhile;
get_footer();
?>