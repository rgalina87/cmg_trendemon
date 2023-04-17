<?php $reviews = get_field('reviews', 'options'); ?>
<section class="td-pricing-reviews <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">

    <div class="container">
        <div class="pricing-reviews__inner">

            <?php if (get_sub_field('section_title')) { ?>
                <h2 class="pricing-reviews__title"><?= get_sub_field('section_title'); ?></h2>
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