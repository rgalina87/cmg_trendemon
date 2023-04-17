<?php
/* Template Name: case study hub page*/
get_header();
?>

<div id="cs-all">

    <?php // page title 
    ?>
    <section id="cs-title" class="">
        <h1><?= get_field('page_title') ?></h1>
    </section>

    <?php // page title 
    ?>
    <section class="cs-container clearfix">
        <div class="cs-items">
            <?php
            $args = array(
                'post_type' => 'case_studies',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <a href="<?php echo get_permalink(); ?>" class="cs-box">
                        <div class="cs-box-container">
                            <?php $csid = get_the_ID(); ?>
                            <div class="cs-box-head">
                                <h2 class="cs-item-title">
                                    <?= get_field('case_study_title', $csid) ?>
                                </h2>
                                <div class="cs-group">
                                    <div class="cs-percent">
                                        <div class="cs-percent-number"><?= get_field('tag_line_1', $csid) ?></div>
                                        <div class="cs-percent-text"><?= get_field('tag_line_2', $csid) ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-box-logo">
                                <img src="<?= get_field('head_image', $csid)['url'] ?>" alt="<?= get_field('head_image', $csid)['alt'] ?>">
                            </div>

                        </div>
                    </a>

            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </section>

</div>
<?php get_footer(); ?>