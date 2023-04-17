<?php if (get_sub_field('link')) { ?>
    <a href="<?= get_sub_field('link') ?>">
    <?php } ?>
    <section class="td-specific-offer <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
        <div class="container">
            <div class="text-image-block">
                <?php if (get_sub_field('title')) { ?>
                    <h2><?= get_sub_field('title') ?></h2>
                <?php } ?>
                <?php if (get_sub_field('image')) { ?>
                    <img src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>" />
                <?php } ?>
            </div>
            <?php if (get_sub_field('text')) { ?>
                <div class="offer-text"><?= get_sub_field('text') ?></div>
            <?php } ?>
        </div>
    </section>
    <?php if (get_sub_field('link')) { ?>
    </a>
<?php } ?>