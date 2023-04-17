<?php
   /**
    * The template for displaying the footer
    *
    * Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package trendemon
    */
   
   ?>



    <footer class="footer_area home_new_ftr">
        <div class="footer_shape"><img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/footer_shape.png" alt=""></div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="f_logo_area">
                            <div class="ftr_logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/ftr_logo.png" alt="">
                                </a>
                            </div>

                               <?php echo get_theme_mod('footer_newcopyright'); ?>
                      <!--       <div class="copy_right">

                              

                                <p>© 2021 TrenDemon. All rights reserved.</p>
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Data Security Policy</a></li>
                                </ul>
                            </div> -->
                        </div>                        
                    </div>

                    <div class="col-lg-2 col-sm-6 f_menu">
                        <div class="ftr_lst">
                          <!--   <h2>OVERVIEW</h2> -->

                          <h2><?php echo get_theme_mod('overview_header'); ?></h2>
                            <?php wp_nav_menu( array( 'theme_location' => 'omenu' ) ); ?>
                         <!--    <ul>
                                <li><a href="javascript:void(0);">HOME</a></li>
                                <li><a href="javascript:void(0);">PRODUCT</a></li>
                                <li><a href="javascript:void(0);">CUSTOMERS</a></li>
                                <li><a href="javascript:void(0);">Resources</a></li>
                                <li><a href="javascript:void(0);">Blog</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 f_menu">
                        <div class="ftr_lst">
                           <!--  <h2>Library</h2> -->

                                <h2><?php echo get_theme_mod('resources_header'); ?></h2>
                            <?php wp_nav_menu( array( 'theme_location' => 'lmenu' ) ); ?>
                        <!--     <ul>
                                <li><a href="javascript:void(0);">SUPPORT & DOCUMENTATION</a></li>
                                <li><a href="javascript:void(0);">RESOURCES</a></li>
                                <li><a href="javascript:void(0);">CASE STUDIES</a></li>
                                <li><a href="javascript:void(0);">BLOG</a></li>
                            </ul> -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 f_social">
                        <div class="last_block">
                            <div class="ftr_lst social_lst new_ftrDtls">

                                <?php echo get_theme_mod('footer_staytouch'); ?>
                              <!--   <h2>STAY IN TOUCH</h2> -->
                              <!--   <ul>
                                    <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="ftr_lst sign_update">
                            <h2>Sign up for updates:</h2>
                            <?php echo do_shortcode('[contact-form-7 id="3116" title="SIGN UP FOR UPDATES"]'); ?>
                            <!-- <div class="update_btn">
                                <input type="text" class="from-control" placeholder="Email id here . . . ">
                                <input type="submit" value="Subscribe" class="basic_btn">
                            </div> -->
                        </div>
                    </div>                   

                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- All Modal -->
    <div class="modal fade demo_modal" id="demo_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Request a <span>trendemon demo</span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/cancel.png" alt="">
              </button>
            </div>
            <div class="modal-body">


                <div class="demo_form">
                    <?= do_shortcode('[contact-form-7 id="3115" title="Request Demo"]') ?>
             <!--        <div class="demo_input">
                        <label>Full name:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="demo_input">
                        <label>Email address:</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="demo_input">
                        <label>Phone number:</label>
                        <input type="number" class="form-control" onkeydown="return event.keyCode !== 69">
                    </div>
                    <div class="demo_input">
                        <label>Company name:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="demoBtn_area">
                        <input type="submit" value="request now" class="demo_btn">
                    </div> -->
                </div>






                <div class="demo_term">
                    <p>By submitting this form, I agree to Trendemon's <a href="javascript:void(0)">privacy policy</a> and <a href="javascript:void(0)">term of service</a>.</p>
                </div>
            </div>
          </div>
        </div>
    </div>

    <!-- jquery.js -->

 
<?php wp_footer(); ?>
</body>

</html>