<?php
if (get_sub_field('data_id')) {
?>

    <div class="<?= get_sub_field('section_class') ?>" data-id="<?= get_sub_field('data_id') ?>"></div>

<?php } else { ?>

    <section class="case-study-paragraph <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>" data-id="<?= get_sub_field('data_id') ?>">
        <div class="container">
            <?php if (get_sub_field('title')) { ?>
                <h2 class=""><?= get_sub_field('title') ?></h2>
            <?php } ?>
            <?php if (get_sub_field('paragraph')) { ?>
                <p class=""><?= get_sub_field('paragraph') ?></p>
            <?php } ?>
        </div>
    </section>
<?php } ?>