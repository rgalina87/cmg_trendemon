<section class="td-lp-cta <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
    <div class="container">
        <div class="lp-cta-cont">
            <?php if(get_sub_field('cta_box_title')) { ?>
                <h2 class="cta-box-title"><?= get_sub_field('cta_box_title') ?></h2>
            <?php } ?>
            <?php if(get_sub_field('cta_box_text')) { ?>
                <div class="cta-box-text"><?= get_sub_field('cta_box_text') ?></div>
            <?php } ?>
            <div class="cta-group">
                <?php if (get_sub_field('cta_title')) { ?>
                    <div class="cta-lp-title">
                        <a id="" href="<?= get_sub_field('cta_url') ?>" class="lp-cta-button">
                            <span><?= get_sub_field('cta_title') ?></span>
                        </a>
                    </div>
                <?php } ?>
                <?php if (get_sub_field('cta_title_2')) { ?>
                    <div class="cta-lp-title cta-title-2">
                        <a id="" href="<?= get_sub_field('cta_url_2') ?>" class="lp-cta-button cta-button-2">
                            <span><?= get_sub_field('cta_title_2') ?></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
