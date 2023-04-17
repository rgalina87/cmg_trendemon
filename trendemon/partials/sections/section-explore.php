<section class="td-explore-items <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
    <div class="container">

        <?php if (get_sub_field('explore_title')) { ?>
            <h2 class=""><?= get_sub_field('explore_title') ?></h2>
        <?php } ?>


        <?php if (get_sub_field('explore_items')) { ?>
            <div class="explore-item-container">
                <?php
                $exp_items = get_sub_field('explore_items');
                foreach ($exp_items as $itm) {
                    if (isset($itm)) {
                ?>
                        <div class="lp-single-exp-item">
                            <a href="<?= $itm['item_url'] ?>">
                                <?php if ($itm['item_image']) { ?>
                                    <img src="<?= $itm['item_image']['url'] ?>" alt="<?= $itm['item_image']['alt'] ?>" />
                                <?php } ?>
                                <div class="exp-item-content">
                                    <?php if ($itm['item_title']) { ?>
                                        <h3 class="lp-single-exp-item-title"><?= $itm['item_title'] ?></h3>
                                    <?php } ?>
                                    <div class="lp-single-exp-item-text">
                                        <?= $itm['item_text'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
        <?php } ?>

    </div>
</section>