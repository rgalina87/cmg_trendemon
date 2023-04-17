<?php /* Template Name: Check Page New */ 
   get_header();
   ?>


<?php echo do_shortcode('[greeting]');?>


<!-- 
<section class="success_outer">
   <div class="shape2"><img src="<?php //echo get_template_directory_uri(); ?>/assetsnew/images/success-bg-2.png" alt=""></div>
   <div class="container">
      <div class="heading">
         <h2><?php //the_field('success_title');?></h2>
         <p><?php //the_field('success_content');?></p>
      </div>
      <div class="number_wrap">
         <div class="row">
            <?php //while(the_repeater_field('success_counter')){ ?>
          <div class="col-md-4">
               <div class="number_outer">
                  <div class="number_img">
                     <img src="<?php //the_sub_field('image'); ?>">
                  </div>
                  <div class="number_txt"> 
                     <h3 ><?php //the_sub_field('counter_heading'); ?></h3>
                     <h6><?php //the_sub_field('counter_subheading'); ?></h6>
                 </div>
               </div>
            </div> -->
            <?php //} ?>

              <!--    <div class="col-md-4">
                        <div class="number_outer">
                            <div class="number_img">
                                <img src="<?php //echo get_template_directory_uri(); ?>/assetsnew/images/numbers-1.png">
                            </div>
                            <div class="number_txt"> -->
                              <!--   <h3>75,000+</h3> -->

                                <?php //echo do_shortcode('[COUNTER_NUMBER id=3166]');?>
                               <!--  <h6>Conversion uplift case study</h6> -->
                   <!--          </div>
                        </div>
                    </div>
 -->


      <!--       <div class="col-md-4">
               <div class="number_outer">
                  <div class="number_img">
                     <img src="<?php //echo get_template_directory_uri(); ?>/assetsnew/images/numbers-2.png">
                  </div> -->
                <!--   <div class="number_txt"> -->

                        <?php //echo do_shortcode('[COUNTER_NUMBER id=3165]');?>
                     <!-- <h3>100k</h3> -->
                 <!--     <h6>Impact on revenue case study</h6> -->
         <!--          </div>
               </div>
               </div> 
            <div class="col-md-4">
               <div class="number_outer">
                  <div class="number_img">
                     <img src="<?php //echo get_template_directory_uri(); ?>/assetsnew/images/numbers-3.png">
                  </div>
                  <div class="number_txt"> -->

                    <?php //echo do_shortcode('[COUNTER_NUMBER id=3162]');?>

                     
                     <!-- <h3>15,00+</h3> -->
   <!--                   <h6>Improved ROI From ABM</h6>
                  </div>
               </div>
               </div>
         </div>
      </div> -->
<!--       <div class="success_wrap">
         <div class="row"> -->
            <!--   <div class="col-md-4">
               <div class="success_box">
                  <div class="success_img"><img src="<?php //echo get_template_directory_uri(); ?>/assetsnew/images/success1.png"></div>
                  <div class="success_txt">
                     <h5>Conversion Uplift Case Study</h5>
                     <a href="#" class="basic_btn2"> Read More</a>
                  </div>
               </div>
               </div> -->
            <?php //while(the_repeater_field('success_image')){ ?>
    <!--         <div class="col-md-4">
               <div class="success_box">
                  <div class="success_img"><img src="<?php //the_sub_field('image'); ?>"></div>
                  <div class="success_txt">
                     <h5><?php //the_sub_field('heading'); ?></h5>
                     <a href="#" class="basic_btn2"> Read More</a>
                  </div>
               </div>
            </div> -->
            <?php //} ?>
            <!--   <div class="col-md-4">
               <div class="success_box">
                  <div class="success_img"><img src="<?php //echo get_template_directory_uri(); ?>/assetsnew/images/success-3.png"></div>
                  <div class="success_txt">
                     <h5>Improved ROI From ABM</h5>
                     <a href="#" class="basic_btn2"> Read More</a>
                  </div>
               </div>
               </div> -->
  <!--        </div>
      </div>
   </div>
</section> -->





<!--Resoures area end-->
<?php get_footer();
   ?>