<?php
$logos_per_line = get_sub_field('number_of_logos_per_line')
?>

<section class="td-logo-partners <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
    <div class="container">
        <?php if (get_sub_field('logos_title')) { ?>
            <h2 class="lp-bullets-grid-title"><?= get_sub_field('logos_title') ?></h2>
        <?php } ?>
        <div class="logos-partner-group <?= $logos_per_line ?>">
            <?php if (get_sub_field('logos')) { ?>
                <?php
                $logos = get_sub_field('logos');
                foreach ($logos as $l) {
                    if (isset($l)) {
                        ?>
                        <div class="single-logo">
                            <?php if ($l['single_logo']) { ?>
                                <img src="<?= $l['single_logo']['url'] ?>" alt="<?=$l['single_logo']['alt'] ?>" />
                            <?php } ?>
                        </div>

                        <?php
                    }
                }
                ?>
            <?php } ?>
        </div>
    </div>
</section>