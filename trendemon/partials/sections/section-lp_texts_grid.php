<section class="td-lp-texts-grid <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
    <div class="container">
        <?php if (get_sub_field('lp_text_grid')) { ?>
            <?php
            $texts_group = get_sub_field('lp_text_grid');
            foreach ($texts_group as $group) {
                if (isset($group)) {
            ?>
                    <div class="text-grid-group">
                        <?php if ($group['lp_text_group_title']) { ?>
                            <h2 class="lp-text-grid-title"><?= $group['lp_text_group_title'] ?></h2>
                        <?php } ?>

                        <div class="text-grid-single">
                            <?php
                            $text_single = $group['lp_text_grid_single'];
                            foreach ($text_single as $item) {
                                if (isset($item)) {
                            ?>
                                    <div class="text-grid-item">
                                        <?php if ($item['lp_text_single_image']) { ?>
                                            <img src="<?= $item['lp_text_single_image'] ?>" class="lp-text-grid-image" />
                                        <?php } ?>
                                        <?php if ($item['lp_text_single_subtitle']) { ?>
                                            <h4 class="lp-text-grid-subtitle"><?= $item['lp_text_single_subtitle'] ?></h4>
                                        <?php } ?>
                                        <?php if ($item['lp_text_single_paragraph']) { ?>
                                            <div class="lp-text-grid-text"><?= $item['lp_text_single_paragraph'] ?></div>
                                        <?php } ?>
                                    </div>
                            <?php
                                }
                            }   ?>
                        </div>
                    </div>
            <?php
                }
            } ?>

        <?php } ?>
    </div>
</section>