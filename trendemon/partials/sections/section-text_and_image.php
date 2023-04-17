<section class="section-text-and-image <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>" data-id="<?= get_sub_field('data_id') ?>">
    <div class="container">
        <?php if (get_sub_field('intro')) { ?>
            <p class="text-image__intro"><?= get_sub_field('intro') ?></p>
        <?php } ?>

        <div class="text-image <?= get_sub_field('direction')&&get_sub_field('image') ? 'reverse' : '' ?>">
            <div class="texts">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="text-image__title"><?= get_sub_field('title') ?></h2>
                <?php } ?>
                <div class="text-image__text">
                <?php if (get_sub_field('text')) { ?>
                    <?= get_sub_field('text') ?>
                <?php } ?>
                </div>
            </div>
            <div class="image">
                <?php if (get_sub_field('image')) { ?>
                    <?php if(get_sub_field('image_link')){ ?><a href="<?= get_sub_field('image_link') ?>"> <?php } ?>
                    <img class="text-image__image" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                    <?php if(get_sub_field('image_link')){ ?></a><?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
