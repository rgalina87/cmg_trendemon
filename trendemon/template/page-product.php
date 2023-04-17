<?php
/* Template name: Product New */
get_header();

?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php if (have_rows('sections')) : ?>
            <?php while (have_rows('sections')) : the_row(); ?>
                <?php get_template_part('partials/sections/section', get_row_layout()); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>


<script>
    const scrollElements = document.querySelectorAll("section");

    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop <=
            (window.innerHeight || document.documentElement.clientHeight) / dividend
        );
    };

    const elementOutofView = (el) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop > (window.innerHeight || document.documentElement.clientHeight)
        );
    };

    const displayScrollElement = (element) => {
        element.classList.add("scrolled");
    };

    const hideScrollElement = (element) => {
        element.classList.remove("scrolled");
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el, i) => {
            if (i == 0) return;
            if (elementInView(el, 1.25)) {
                displayScrollElement(el);
            } else if (elementOutofView(el) && !el.classList.contains("scrolled")) {
                hideScrollElement(el)
            }
        })
    }

    window.addEventListener("scroll", () => {
        handleScrollAnimation();
    });
    handleScrollAnimation();
</script>