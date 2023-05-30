<section class="td-lp-hero <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>" data-id="<?= get_sub_field('data_id') ?>">
    <div class="container">
        <div class="lp-hero-main">
            <div class="hero-text-part">
                <?php if (get_sub_field('lp_hero_title')) { ?>
                    <h1 class="lp-hero-title"><?= get_sub_field('lp_hero_title') ?></h1>
                <?php } ?>
                <?php if (get_sub_field('lp_hero_text')) { ?>
                    <div class="lp-hero-text"><?= get_sub_field('lp_hero_text') ?></div>
                <?php } ?>
                <div class="cta-group hero-cta-group">
                    <?php if (get_sub_field('cta_title')) { ?>
                        <div class="cta-lp-title">
                            <a id="" href="<?= get_sub_field('cta_url') ?>" class="lp-cta-button">
                                <span><?= get_sub_field('cta_title') ?></span>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (get_sub_field('cta_video_title')) { ?>
                        <div class="cta-lp-title cta-video-title">
                            <a id="" href="<?= get_sub_field('cta_video_url') ?>" class="lp-cta-button cta-video-button">
                                <span><?= get_sub_field('cta_video_title') ?></span>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php
            if (get_sub_field('show_json_animation')) { ?>
                <?php if (get_sub_field('lp_hero_animation_file')) { ?>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="<?= get_sub_field('lp_hero_animation_file') ?>" background="transparent" speed="1" loop autoplay></lottie-player>
                <?php }elseif (get_sub_field('lp_video')) {
                     the_sub_field('lp_video');
                }
            } else {
                if (get_sub_field('lp_hero_image')) { ?>
                    <img src="<?= get_sub_field('lp_hero_image') ?>" class="<?= get_sub_field('add_shadow_to_image') ? 'shadow' : ''; ?>" />
            <?php }
            } ?>

        </div>

    </div>
</section>