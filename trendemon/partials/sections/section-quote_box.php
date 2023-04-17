<section class="td-quote-box <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
    <div class="container">
        <?php if (get_sub_field('quote')) { ?>
            <blockquote class="quote-text"><?= get_sub_field('quote') ?></blockquote>
        <?php } ?>
        <div class="quote-author-group">
            <div class="author-info">
            <?php if (get_sub_field('author')) { ?>
                <div class="quote-author"><?= get_sub_field('author') ?></div>
            <?php } ?>
            <?php if (get_sub_field('position')) { ?>
                <div class="quote-position"><?= get_sub_field('position') ?></div>
            <?php } ?>
            </div>
        <?php if (get_sub_field('image')) { ?>
            <img src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>" />
        <?php } ?>
        </div>
    </div>
</section>

