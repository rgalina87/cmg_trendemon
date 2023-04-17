<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


    <!--footer start  -->
    <footer class="footer_area">
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="ftr_logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="https://trendemon.com/wp-content/uploads/2019/08/ftr_logo.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="ftr_lst">
                            <h2><?php echo get_theme_mod('overview_header'); ?></h2>
                            <?php wp_nav_menu( array( 'theme_location' => 'overview-menu' ) ); ?>
                        </div>
                    </div>
					
					<div class="col-lg-3 col-md-4">
                        <div class="ftr_lst">
                            <h2><?php echo get_theme_mod('resources_header'); ?></h2>
                            <?php wp_nav_menu( array( 'theme_location' => 'resource-menu' ) ); ?>
                        </div>
                    </div>
					
					<div class="col-lg-3 col-md-4">
                        <div class="ftr_lst ftr_lst_last social_lst">
                            <h2><?php echo get_theme_mod('stay_header'); ?></h2>
                            <ul>
                                
                                <li>
                                    <a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
							
								<?php //echo do_shortcode('[mc4wp_form id="349"]'); ?>
								
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "20357418",
	formId: "e7a0dc44-b691-4c6a-b890-23762044e479"
});
</script>
                        </div>
                    </div>

                    <div class="copy_right">
                        <p><?php echo get_theme_mod('footer_copyright'); ?></p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
</div>
<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/c0d09ae8ce.js" crossorigin="anonymous"></script>

</body>
</html>