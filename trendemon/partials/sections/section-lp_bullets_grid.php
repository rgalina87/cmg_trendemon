<?php
$columns = get_sub_field('amount_of_columns')
?>

<section class="td-lp-bullets-grid <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
    <div class="container">
        <?php if (get_sub_field('bullets_grid_title')) { ?>
            <h2 class="lp-bullets-grid-title"><?= get_sub_field('bullets_grid_title') ?></h2>
        <?php } ?>
        <?php if (get_sub_field('lp_bullets_grid_text')) { ?>
            <p class="lp-bullets-grid-title"><?= get_sub_field('lp_bullets_grid_text') ?></p>
        <?php } ?>

        <div class="lp-bullets-grid-group <?= $columns ?>">
            <?php if (get_sub_field('bullets_grid_item')) { ?>
                <?php
                $bullets = get_sub_field('bullets_grid_item');
                foreach ($bullets as $b) {
                    if (isset($b)) {
                ?>
                  <div class="lp-single-bullet">
                      <?php if ($b['bullets_grid_item_image']) { ?>
                          <img src="<?= $b['bullets_grid_item_image']['url'] ?>" alt="<?=$b['bullets_grid_item_image']['alt'] ?>" />
                      <?php } ?>
                      <?php if ($b['bullets_grid_item_title']) { ?>
                          <div class="lp-single-bullet-title"><?= $b['bullets_grid_item_title'] ?></div>
                      <?php } ?>
                      <div class="lp-single-bullet-text">
                      <?= $b['bullets_grid_item_text'] ?>
                      </div>
                  </div>

            <?php
                    }
                }
                ?>
            <?php } ?>
        </div>
    </div>
</section>
