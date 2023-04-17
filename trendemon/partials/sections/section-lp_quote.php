<section class="td-lp-quote <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
    <div class="container">
        <div class="lp-quote-cont">
            <?php if (get_sub_field('lp_quote')) { ?>
                <div class="lp-quote-text"><?= get_sub_field('lp_quote') ?></div>
            <?php } ?>
            <?php if (get_sub_field('lp_quote_author')) { ?>
                <div class="lp-quote-author"><?= get_sub_field('lp_quote_author') ?></div>
            <?php } ?>
            <?php if (get_sub_field('lp_quote_authors_info')) { ?>
                <div class="lp-quote-authors-info"><?= get_sub_field('lp_quote_authors_info') ?></div>
            <?php } ?>
        </div>

        <div class="lp-cta-cont">
            <?php if (get_sub_field('cta_box_title')) { ?>
                <h2 class="cta-box-title"><?= get_sub_field('cta_box_title') ?></h2>
            <?php } ?>
            <?php if (get_sub_field('cta_box_text')) { ?>
                <div class="cta-box-text"><?= get_sub_field('cta_box_text') ?></div>
            <?php } ?>
            <?php if (get_sub_field('cta_title')) { ?>
                <div class="cta-lp-title">
                    <a id="" href="<?= get_sub_field('cta_url') ?>" class="lp-cta-button">
                        <span><?= get_sub_field('cta_title') ?></span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>