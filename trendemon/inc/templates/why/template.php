<?php

/**
 * [Template] pricing
 */

get_header();
while (have_posts()) : the_post();
?>


    <main class="why">

        <?php $imagesandtexts = get_field('imagesandtexts'); ?>

        <section class="why-imageAndTexts">
            <div class="container">
                <div class="why-imageAndTexts__inner">

                    <header class="why-imageAndTexts__header">
                        <h2 class="why-imageAndTexts__title" data-default-title="<?= $imagesandtexts[0]['top_title']; ?>"><?= $imagesandtexts[0]['top_title']; ?></h2>

                        <nav class="why-imageAndTexts__nav">

                            <?php if (have_rows('imagesandtexts')) : ?>
                                <?php $i = 1;
                                while (have_rows('imagesandtexts')) : the_row(); ?>

                                    <a href="#iat<?= $i; ?>" class="why-imageAndTexts__navItem"></a>

                                <?php $i++;
                                endwhile; ?>
                            <?php endif; ?>
                        </nav>
                    </header>

                    <div class="why-imageAndTexts__wrapper">

                        <div class="why-imageAndTexts__images">
                            <?php if (have_rows('imagesandtexts')) : ?>
                                <?php $i = 1;
                                while (have_rows('imagesandtexts')) : the_row(); ?>

                                    <img data-target="iat<?= $i; ?>" <?php if ($i == 1) { ?>class="image-active" <?php } ?> src="<?= get_sub_field('image')['url']; ?>" onclick="openLightbox('<?= get_sub_field('image')['url']; ?>')" <?php if (get_sub_field('image2x')) { ?>srcset="<?= get_sub_field('image2x')['url']; ?> 2x" <?php } ?> alt="<?= get_sub_field('image')['alt']; ?>">

                                <?php $i++;
                                endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="why-imageAndTexts__content">

                            <?php if (have_rows('imagesandtexts')) : ?>
                                <?php $i = 1;
                                while (have_rows('imagesandtexts')) : the_row(); ?>

                                    <div class="why-imageAndTexts__content-block" id="iat<?= $i; ?>" data-dynamic-title="<?php the_sub_field('top_title'); ?>">
                                        <?php if (get_sub_field('image')) { ?>
                                            <picture class="why-imageAndTexts__content-image tablet-visible">
                                                <img src="<?= get_sub_field('image')['url']; ?>" <?php if (get_sub_field('image2x')) { ?>srcset="<?= get_sub_field('image2x')['url']; ?> 2x" <?php } ?> alt="<?= get_sub_field('image')['alt']; ?>">
                                            </picture>
                                        <?php } ?>

                                        <?php if (get_sub_field('subtitle')) { ?>
                                            <h3 class="why-imageAndTexts__content-subtitle"><?php the_sub_field('subtitle'); ?></h3>
                                        <?php } ?>

                                        <?php if (get_sub_field('subtitle2')) { ?>
                                            <h3 class="why-imageAndTexts__content-subtitle"><?php the_sub_field('subtitle2'); ?></h3>
                                        <?php } ?>

                                        <?php if (get_sub_field('text')) { ?>
                                            <div class="why-imageAndTexts__content-text">
                                                <?php the_sub_field('text'); ?>
                                            </div>
                                        <?php } ?>

                                        <?php if (get_sub_field('button')) { ?>
                                            <a class="why-imageAndTexts__content-button prevent-hash-scroll" href="<?= get_sub_field('button')['url']; ?>" <?php if (isset(get_sub_field('button')['target']) && get_sub_field('button')['target']) { ?>target="<?= get_sub_field('button')['target']; ?>" <?php } ?>><?= get_sub_field('button')['title']; ?></a>
                                        <?php } ?>
                                    </div>

                                <?php $i++;
                                endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>

                    <?php if (get_field('imagesandtexts_mobile_button')) { ?>
                        <a class="why-imageAndTexts__button tablet-visible" href="<?= get_field('imagesandtexts_mobile_button')['url']; ?>" <?php if (isset(get_field('imagesandtexts_mobile_button')['target']) && get_field('imagesandtexts_mobile_button')['target']) { ?>target="<?= get_field('imagesandtexts_mobile_button')['target']; ?>" <?php } ?>><?= get_field('imagesandtexts_mobile_button')['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </section>

    </main>

    <?php if (get_field('paragraph_class')) { ?>
        <div class="<?= get_field('paragraph_class') ?>" data-id="<?= get_field('paragraph_data-id') ?>"></div>
    <?php } ?>
<?php
endwhile;
get_footer();
?>

<style>
    /* CSS for the lightbox */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8); /* Change the background color here */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .lightbox img {
        max-width: 100%;
        max-height: 100%;
    }

    .image-active:hover,
    .lightbox img:hover {
        cursor: pointer;
    }
</style>
<script>
    // Open the lightbox
    function openLightbox(imageUrl) {
        var lightbox = document.createElement("div");
        lightbox.classList.add("lightbox");

        var image = document.createElement("img");
        image.src = imageUrl;
        image.addEventListener("click", closeLightbox);

        lightbox.appendChild(image);
        document.body.appendChild(lightbox);

        // Close the lightbox when clicking outside the image
        lightbox.addEventListener("click", function(event) {
            if (event.target === lightbox) {
                closeLightbox();
            }
        });
    }

    // Close the lightbox
    function closeLightbox() {
        var lightbox = document.querySelector(".lightbox");
        lightbox.remove();
    }

    // Close with Esc key press
    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape") {
            closeLightbox();
        }
    });
</script>
