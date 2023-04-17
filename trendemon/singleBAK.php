<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    <!--Blog details-->
    <section class="blg_dtls_sec">
        <div class="container">
            <div class="blg_dtls_outr blg_dtls_outr_2020">
				<div class="blg_dtls_img">
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
				</div>
                <!--<div class="blg_dtls_img">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                </div>-->
                <div class="blog-single-grid">
                    <div class="blog-single-banner">
                        <?php $blog_banner = get_field('blog_banner', 'options'); ?>
                        <?php if ($blog_banner['banner_title']) {?>
                        <h3><?= $blog_banner['banner_title'] ?></h3>
                        <?php } ?>
                        <?php if ($blog_banner['banner_text']) {?>
                        <p><?= $blog_banner['banner_text'] ?></p>
                        <?php } ?>
                        <?php if ($blog_banner['cta_title']) { ?>
                        <a href="<?= $blog_banner['cta_url'] ?>" <?= $blog_banner['new_tab'] ? 'target="_blank"' : '' ?>>
                            <span><?= $blog_banner['cta_title'] ?></span>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="blog-single-content">
                        <h1><?php the_title(); ?></h1>
                        <div class="blg_dtls_txt .blg_dtls_txt_2020">
                            <div class="drop_cap">
                                <?php if (have_posts()): ?>
                                    <?php while ( have_posts()): the_post(); ?>
                                    <?php the_content(); ?>
                                <?php endwhile; endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-single-newsletter">
                        <?php if ($blog_banner['newsletter_banner_title']) {?>
                            <h4><?= $blog_banner['newsletter_banner_title'] ?></h4>
                        <?php } ?>
                        <div id="side-banner-form"></div>
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script>
                            hbspt.forms.create({
                                target: '#side-banner-form',
                                region: "na1",
                                portalId: "20357418",
                                formId: "e7a0dc44-b691-4c6a-b890-23762044e479"
                            });
                        </script>
                    </div>
                </div>
				<!--
                <div class="blg_dtls_share_outer">
                    <div class="blg_dtls_share">
                        <div class="share_dtls">
                            <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                            <em>share</em>
                        </div>
                    </div>
                    
                </div>
				-->
				<div class="trd-ph-embedded" data-group="blog"></div>
            </div>
        </div>
    </section>
    <!--Blog details end-->
<style>
.blg_dtls_img{
	border-radius:0;
}



.blg_dtls_outr h1{
	text-align:left;
	padding-bottom:25px;	
	margin-bottom:30px;
	border-bottom: 1px solid #D9D9D9
}

.blg_dtls_outr_2020 {
    max-width: 800px;
	margin: 0 auto;
}

@media (max-width: 480px){
.blg_dtls_outr h1{
	font-size:25px;
}
.blg_dtls_txt p, .blg_dtls_txt ul li, .blg_dtls_txt ol li{
	line-height:1.5;
	margin-bottom:10px;
}

}

</style>
<?php
get_footer();
