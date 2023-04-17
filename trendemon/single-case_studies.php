<?php get_header(); ?>
<div class="case-study-content-container">

    <div class="case-study-content-part">
        <div class="case-study-content">

            <div class="case-study-toc-container">
                <?php if (get_field('show_toc')) { ?>
                    <div class="case-study-toc">
                        <h3>Table of contents</h3>
                        <?php if (have_rows('sections')) : ?>
                            <?php while (have_rows('sections')) : the_row(); ?>
                                <?php if (get_sub_field('title')) { ?>
                                    <div class="toc-content">
                                        <a href="#<?php echo sanitize_title(get_sub_field('title')); ?>"><?php echo get_sub_field('title'); ?></a>
                                    </div>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div>

            <div class="case-study-post">
                <div class="case-study-hero-grid">
                    <div class="case-study-hero-title">
                        <?php if (get_field('case_study_title')) { ?>
                            <h1 class="case-study-title"><?= get_field('case_study_title') ?></h1>
                        <?php } ?>
                    </div>
                    <div class="case-study-hero-logo">
                        <?php if (get_field('head_image')) { ?>
                            <img src="<?= get_field('head_image')['url'] ?>" alt="<?= get_field('head_image')['alt'] ?>" />
                        <?php } ?>
                    </div>
                </div>
                <?php if (have_rows('sections')) : ?>
                    <?php while (have_rows('sections')) : the_row(); ?>
                        <a class="para-title" id="<?php echo sanitize_title(get_sub_field('title')); ?>"><?php get_template_part('partials/sections/section', get_row_layout()); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="case-study-banner-container">
                <?php if (get_field('show_side_banner')) { ?>
                    <div class="case-study-banner">

                        <?php if (get_field('banner_title')) { ?>
                            <h3><?= get_field('banner_title') ?></h3>
                        <?php } ?>
                        <?php if (get_field('banner_content')) { ?>
                            <p><?= get_field('banner_content') ?></p>
                        <?php } ?>
                        <?php if (get_field('cta_title')) { ?>
                            <div class="case-study-cta">
                                <a id="" href="<?= get_field('cta_url') ?>" class="case-study-banner-cta">
                                    <span><?= get_field('cta_title') ?></span>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</div>

<div class="trd-ph-embedded" data-id="da0e21ef-ba92-489a-a051-d2ae96afd1de"></div>
<div class="trd-ph-embedded" data-id="c560a4f1-4a2a-4976-a9e5-3850ccb33f1c"></div>

<?php get_footer(); ?>

<script>
    $(window).scroll(function() {
        var windscroll = $(window).scrollTop(); //windscroll + 140


        if (windscroll >= 0) {
            $(".para-title").each(function(i) {
                if ($(this).position().top <= (windscroll + 240)) {

                    $('.toc-content a.active').removeClass('active');
                    $('.toc-content').eq(i).find('a').addClass('active');
                }
            });
        } else {

            $('.toc-content a.active').removeClass('active');
            $('.toc-content a:first').addClass('active');
        }
    }).scroll();
</script>