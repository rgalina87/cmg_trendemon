<?php /* Template Name: Homepage 2022 */


wp_enqueue_style('bootstrapss', get_template_directory_uri() . '/assetsnew/css/bootstrap.min.css');
wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
wp_enqueue_style('animate', get_template_directory_uri() . '/assetsnew/css/animate.css');
//wp_enqueue_style('mroph', get_template_directory_uri().'/assetsnew/css/mroph_dropdown_style.css' );
wp_enqueue_style('fontse', get_template_directory_uri() . '/assetsnew/css/fonts.css');
wp_enqueue_style('allmin', get_template_directory_uri() . '/assetsnew/css/all.min.css');

//moved to assets

// wp_enqueue_style('responsives', get_template_directory_uri() . '/assetsnew/css/responsive.css');
// wp_enqueue_style('sliderss', get_template_directory_uri().'/assetsnew/css/slider.css' );
wp_enqueue_style('counter', get_template_directory_uri() . '/assetsnew/css/counter.css');
//wp_enqueue_style('developer', get_template_directory_uri().'/assetsnew/css/developer.css' );




wp_enqueue_script('jquerys', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js');
wp_enqueue_script('jmigrate', 'https://code.jquery.com/jquery-migrate-3.0.0.min.js');
wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true);

wp_enqueue_script('bs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
// wp_enqueue_script('slicker', get_template_directory_uri() . '/assetsnew/js/slick.js', array(), '1.0.0', true);
wp_enqueue_script('slickwe', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.0', true);
wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true);
wp_enqueue_script('modernizr', get_template_directory_uri() . '/assetsnew/js/modernizr-custom.js', array(), '1.0.0', true);
wp_enqueue_script('main', get_template_directory_uri() . '/assetsnew/js/main.js', array(), '1.0.0', true);
wp_enqueue_script('customyu', get_template_directory_uri() . '/assetsnew/js/custom.js', array(), '1.0.0', true);
// wp_enqueue_script('sliderjs', get_template_directory_uri() . '/assetsnew/js/slider.js', array(), '1.0.0', true);
// wp_enqueue_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', array(), '1.0.0', true);
wp_enqueue_script('counterjse', get_template_directory_uri() . '/assetsnew/js/jquery.countup.min.js', array(), '1.0.0', true);
wp_enqueue_script('countdown', get_template_directory_uri() . '/assetsnew/js/countdown.js', array(), '1.0.0', true);

wp_enqueue_script('writing', get_template_directory_uri() . '/assetsnew/js/writing.js', array(), '1.0.0', true);


get_header();

?>
<!-- banner_sec   -->
<section id="banner_sec" class="new_home_banner" style="background-image: url(<?php the_field('banner-image'); ?>);">
   <div class="home_banner_content">
      <div class="banner_caption_outer">
         <div class="container">
            <div class="banner_caption">
               <div class="banner_heading">
                  <h1><?php the_field('banner_heading'); ?></h1>
                  <h2><?php the_field('banner_subtitle'); ?></h2>
                  <div class="search_section">
                     <div class="form-container">
                        <h4><?php the_field('customizable_heading'); ?></h4>
                        <div class="search_box" id="domain-area">

                           <input class="search_field" name="domain" id="domain" placeholder="your-website.com" size="30" pattern="/^[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9]\.[a-zA-Z]{2,}$/" />
                           <button class="search_btn" id="domain_go"> Start Free</button>

                           <script>
                              document.getElementById("domain").addEventListener('change', (event) => {
                                 var domain = document.getElementById("domain").value;
                                 if (!CheckIsValidDomain(domain)) {
                                    document.getElementById("domain-area").classList.add("error");
                                 } else {
                                    document.getElementById("domain-area").classList.remove("error");
                                 }
                              });

                              document.getElementById("domain").onkeydown = function(event) {
                                 if (event.keyCode === 13) {
                                    getStarted();
                                 }
                              };

                              document.getElementById("domain_go").onclick = getStarted;


                              function getStarted() {
                                 document.getElementById("domain-area").classList.add("error");
                                 var domain = document.getElementById("domain").value;
                                 if (CheckIsValidDomain(domain)) {
                                    window.open('https://free-trial.trendemon.com/?domain=' + domain, '_blank');
                                    document.getElementById("domain-area").classList.remove("error");
                                 } else if (validURL(domain)) {
                                    var hostname = getHostname(domain);
                                    window.open('https://free-trial.trendemon.com/?domain=' + hostname, '_blank');
                                    document.getElementById("domain-area").classList.remove("error");
                                 } else {
                                    document.getElementById("search_field").classList.add("error");
                                 }
                              }

                              function CheckIsValidDomain(domain) {

                                 var re = new RegExp(/^((?:(?:(?:\w[\.\-\+]?)*)\w)+)((?:(?:(?:\w[\.\-\+]?){0,62})\w)+)\.(\w{2,6})$/);
                                 return domain.match(re);

                              }

                              function validURL(str) {
                                 var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
                                    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
                                    '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                                    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
                                    '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
                                    '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
                                 return !!pattern.test(str);
                              }

                              function getHostname(url) {
                                 //var pattern = "^(?:https?:)?(?:\/\/)?([^\/\?]+)";
                                 var matches = url.match(/^https?\:\/\/([^\/?#]+)(?:[\/?#]|$)/i);
                                 var hostname = matches && matches[1];
                                 return hostname;
                              }
                           </script>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="banner_img">
                  <img src="<?php the_field('banner_image_2'); ?>" alt="<?php the_field('banner_heading'); ?>">
               </div>
            </div>
         </div>

      </div>
   </div>
</section>



<!-- banner_sec--end -->
<!--Partner area-->



<section class="partner_area">

   <?php
   if (get_field('animation_duration')) { ?>

      <style>
         .partnr_outr .h_partnr_sliding {
            animation-duration: <?php the_field('animation_duration') ?>s;
         }
      </style>
   <?php } ?>
   <div class="container">
      <div class="partnr_outr">
         <div class="h_partnr_sliding newfadePartners">

            <?php

            while (the_repeater_field('partner_logo')) :
            ?>
               <div class="items ">

                  <img src="<?php the_sub_field('imagen') ?>" alt="">
               </div>


            <?php endwhile; ?>
            <?php

            while (the_repeater_field('partner_logo')) :
            ?>
               <div class="items ">

                  <img src="<?php the_sub_field('imagen') ?>" alt="">
               </div>


            <?php endwhile; ?>
            <?php

            while (the_repeater_field('partner_logo')) :
            ?>
               <div class="items ">

                  <img src="<?php the_sub_field('imagen') ?>" alt="">
               </div>


            <?php endwhile; ?>
            <?php

            while (the_repeater_field('partner_logo')) :
            ?>
               <div class="items ">

                  <img src="<?php the_sub_field('imagen') ?>" alt="">
               </div>


            <?php endwhile; ?>


         </div>
      </div>
      <?php /*
      <div class="partnr_outr">
         <div class="h_partnr_slide newfadePartners">
            <?php
            $i = 0;
            while (the_repeater_field('partner_logo')) :
               $i++ ?>
               <div class="items fadePartnersRow">

                  <img src="<?php the_sub_field('imagen') ?>" alt="">
               </div>


            <?php endwhile; ?>
            <?php
            $i = 0;
            while (the_repeater_field('partner_logo')) :
               $i++ ?>
               <div class="items fadePartnersRow">

                  <img src="<?php the_sub_field('imagen') ?>" alt="">
               </div>


            <?php endwhile; ?>

         </div>
      </div>
      */ ?>
   </div>
</section>

<!--Value -->
<section class="value_area">
    <div class="container">
    <?php if (get_field ('section_value_title')) { ?>
        <div class="heading">
            <h2> <?= get_field('section_value_title') ?> </h2>
        </div>
    <?php } ?>
        <div class="<?= get_field('value_content')['sec-class'] ?>"  data-id="<?= get_field('value_content')['sec-data-id'] ?>"></div>
    </div>
</section>

<!--Partner area-->

<section class="testimonials_area">
   <div class="container">
      <div class="heading">
         <h2><?php the_field('testimonials_title'); ?></h2>
      </div>
      <div class="testimonials_container">
         <?php
         $i = 0;
         while (the_repeater_field('the_testimonials')) :
            $i++ ?>
            <div class="testimonial_item">
               <div class="testimonial_quote">
                  <div class="testimonial_text">
                     “<?php the_sub_field('the_quote') ?>”
                  </div>
                  <?php if (get_sub_field('quote_highlight_number') || get_sub_field('quote_highlight_text')) { ?>
                     <h3 class="testimonial_highlight">
                        <?php if (get_sub_field('quote_highlight_number')) { ?><span><?php the_sub_field('quote_highlight_number') ?></span><?php } ?>
                        <?php if (get_sub_field('quote_highlight_text')) { ?><?php the_sub_field('quote_highlight_text') ?><?php } ?>

                     </h3>
                  <?php } ?>
               </div>

               <div class="testimonial-person">
                  <?php if (get_sub_field('picture')) { ?>
                     <div class="testimonial_pic">
                        <img src="<?php the_sub_field('picture') ?>" alt="<?php the_sub_field('name') ?>">
                     </div>
                  <?php } ?>
                  <div class="testimonial_person_info">
                     <div class="testimonials_name"><?php the_sub_field('name') ?></div>
                     <?php the_sub_field('position') ?>
                  </div>
               </div>
            </div>
         <?php endwhile; ?>


      </div>
   </div>
</section>

<!-- From maze to amaze start -->
<section class="from_maze_sec">
   <div class="container">
      <div class="heading">
         <h2><?php the_field('heading_2'); ?></h2>
      </div>
      <?php if (wp_is_mobile()) { ?>
         <div class="website_img mobile">
            <img src="<?php echo (the_field('amaze_banner_for_mobile')); ?>" alt="<?php the_field('heading_2'); ?>">
         </div>
      <?php } else { ?>
         <div class="website_img desktop">
            <img src="<?php echo (the_field('amaze_banner')); ?>" alt="<?php the_field('heading_2'); ?>">
         </div>
      <?php } ?>
   </div>
</section>
<!-- From maze to amaze end -->
<!--Works great with-->




<section class="grt_with_section">
   <div class="container">
      <h4><?php the_field('heading_3'); ?></h4>
      <div class="partner_outer">
         <div class="h_partnr_slide_sec fadePartnerss">

            <?php while (the_repeater_field('work_logo')) { ?>
               <div class="items fadePartnersRow">

                  <img src="<?php the_sub_field('logo'); ?>" alt="">

               </div>
            <?php } ?>

         </div>
      </div>
   </div>
</section>

<!--Works great with-->
<!--video_section-->
<section class="video_section">
   <div class="shape1"><img src="<?php echo (the_field('ssectionimage')); ?>" alt=""></div>
   <div class="container">

      <div class="heading">
         <?php echo (the_field('shape_content')); ?>
      </div>
      <div class="video_container">
         <div class="video"><img src=" <?php echo (the_field('shape_video_image')); ?>" alt=""></div>

      </div>
      <div class="video-buttons">
         <a class="pinkbutton" href="javascript:void()" data-toggle="modal" data-target="#hp_video_modal"><?php the_field('cta_watch_video_title'); ?></a>
         <a class="bluebutton" href="<?php the_field('cta_demo_url'); ?>"><?php the_field('cta_demo_title'); ?></a>
      </div>
   </div>
</section>

<div class="modal fade demo_modal" id="hp_video_modal">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-body" style="padding:5px;">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
         </div>
      </div>
   </div>
</div>

<?php $reviews = get_field('reviews', 'options'); ?>
    <section class="td-pricing-reviews <?= get_sub_field('section_class') ?>" id="<?= get_sub_field('section_id') ?>">
        <div class="container">
            <div class="pricing-reviews__inner">

                <?php if (isset($reviews['title']) && $reviews['title']) { ?>
                    <h2 class="pricing-reviews__title"><?= $reviews['title']; ?></h2>
                <?php } ?>

                <div class="pricing-reviews__slider-wrapper">

                    <div class="pricing-reviews__slider">
                        <div class="swiper-wrapper">

                            <?php if (isset($reviews['list']) && $reviews['list']) { ?>
                                <?php foreach ($reviews['list'] as $item) : ?>

                                    <div class="pricing-reviews__slide swiper-slide">
                                        <div class="pricing-reviews__slide-author">

                                            <div class="pricing-reviews__slide-image">
                                                <?php if ($item['author_avatar'] == 'monogram') { ?>
                                                    <?php if (isset($item['author_monogram']) && $item['author_monogram']) { ?>
                                                        <div class="monogram"><?= $item['author_monogram']; ?></div>
                                                    <?php } ?>
                                                <?php } ?>

                                                <?php if ($item['author_avatar'] == 'image') { ?>
                                                    <?php if (isset($item['author_image']['url']) && $item['author_image']['url']) { ?>
                                                        <img class="no-lazyload" src="<?= $item['author_image']['url']; ?>" <?php if (isset($item['author_image2x']['url']) && $item['author_image2x']['url']) { ?>srcset="<?= $item['author_image2x']['url']; ?> 2x" <?php } ?> alt="<?= $item['author_image']['alt']; ?>">
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>

                                            <?php if (isset($item['author_name']) && $item['author_name']) { ?>
                                                <div class="pricing-reviews__slide-name"><?= $item['author_name']; ?></div>
                                            <?php } ?>

                                            <?php if (isset($item['author_position']) && $item['author_position']) { ?>
                                                <div class="pricing-reviews__slide-position"><?= $item['author_position']; ?></div>
                                            <?php } ?>
                                        </div>

                                        <div class="pricing-reviews__slide-content">
                                            <?php if (isset($item['title']) && $item['title']) { ?>
                                                <div class="pricing-reviews__slide-title"><?= $item['title']; ?></div>
                                            <?php } ?>

                                            <div class="pricing-reviews__slide-rating">
                                                <?php if (isset($item['stars']) && $item['stars']) { ?>
                                                    <div class="pricing-reviews__slide-stars">
                                                        <?php pricing_rating_get_stars($item['stars']); ?>
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($item['date']) && $item['date']) { ?>
                                                    <div class="pricing-reviews__slide-date"><?= $item['date']; ?></div>
                                                <?php } ?>
                                            </div>

                                            <div class="pricing-reviews__slide-quote">
                                                <?php if (isset($item['quote']) && $item['quote']) { ?>
                                                    <q><?= $item['quote']; ?></q>
                                                <?php } ?>
                                            </div>

                                            <?php if (isset($item['more_link']['url']) && $item['more_link']['url']) { ?>
                                                <div class="pricing-reviews__slide-moreWrapper">
                                                    <a href="<?= $item['more_link']['url']; ?>" <?php if (isset($item['more_link']['target']) && $item['more_link']['target']) { ?>target="<?= $item['more_link']['target']; ?>" <?php } ?>><?= $item['more_link']['title']; ?></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            <?php } ?>

                        </div>
                    </div>

                    <div class="swiper-pagination"></div>

                </div>

            </div>
        </div>
    </section>

<script>
   var $frame = $('#hp_video_modal iframe');
   var vidsrc = '<?php the_field('video_url'); ?>';

   var page_width = Math.max(
      document.body.scrollWidth,
      document.documentElement.scrollWidth,
      document.body.offsetWidth,
      document.documentElement.offsetWidth,
      document.documentElement.clientWidth
   );



   $('.pinkbutton').on('click', function() {
      $frame.attr('src', vidsrc);
   })


   $('#hp_video_modal').on('hidden.bs.modal', function() {
      $frame.attr('src', '');
   });
</script>

<!--video_section-->
<section class="how_work">
   <div class="container">
      <div class="heading">
         <h2><?php the_field('work_title'); ?></h2>
         <p><?php the_field('works_content'); ?></p>
      </div>
      <div class="work_container">
         <?php while (the_repeater_field('video_section_loop')) { ?>
            <div class="work_row">
               <div class="row">
                  <div class="col-md-6 w_img">
                     <div class="work_img"><img src="<?php the_sub_field('image'); ?>" alt=""></div>
                  </div>
                  <div class="col-md-6 w_info">
                     <div class="work_info">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('content'); ?></p>
                     </div>
                  </div>
               </div>
               <div class="arrow_shape"><img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/arrow_shape.png" alt=""></div>
            </div>

         <?php } ?>
      </div>
   </div>
</section>

<section class="success_outer">
   <div class="shape2"><img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/success-bg-2.png" alt=""></div>
   <div class="container">
      <div class="heading">
         <h2><?php the_field('success_title'); ?></h2>
         <p><?php the_field('success_content'); ?></p>
      </div>
      <div class="number_wrap">
         <div class="row">
            <?php while (the_repeater_field('success_counter')) { ?>
               <div class="col-md-4">
                  <div class="number_outer">
                     <div class="number_img">
                        <img src="<?php the_sub_field('image'); ?>">
                     </div>
                     <div class="number_txt">
                        <h3><?php the_sub_field('counter_heading'); ?></h3>
                        <h6><?php the_sub_field('counter_subheading'); ?></h6>
                     </div>
                  </div>
               </div>
            <?php } ?>


         </div>
      </div>
      <?php if (!get_field('hide_success_boxes')) { ?>
         <div class="success_wrap">
            <div class="row">

               <?php while (the_repeater_field('success_image')) { ?>
                  <div class="col-md-4">
                     <div class="success_box">
                        <div class="success_img"><img src="<?php the_sub_field('image'); ?>"></div>
                        <div class="success_txt">
                           <h5><?php the_sub_field('heading'); ?></h5>
                           <a href="<?php the_sub_field('_button_link'); ?>" class="basic_btn2">Read More</a>
                        </div>
                     </div>
                  </div>
               <?php } ?>

            </div>
         </div>
      <?php } ?>
   </div>
</section>
<section class="demo">
   <div class="container">
      <div class="demo_inn">
         <h2><?php the_field('want_to_learn_heading'); ?></h2>
         <a href="<?php the_field('cta_demo_url'); ?>" class="get_demo_btn-wt">Get Demo</a>
         <?php /* echo do_shortcode('[learnmore]'); */ ?>
      </div>
   </div>
</section>
<!--Resoures area-->
<section class="dive_sec">
   <div class="container">
      <div class="heading">
         <h2><?php the_field('blog_section_title'); ?></h2>
      </div>
      <div class="new_resource_innr">
         <div class="trd-ph-embedded" data-group="blog"></div>

         <?php /*
         <div class="blg_dtls">
            <?php
            $args = array(
               'post_type' => 'post',
               'orderby'    => 'ID',
               'post_status' => 'publish',
               'category_name' => 'trendemon',
               'order'    => 'DESC',
               'posts_per_page' => -1 // this will retrive all the post that is published
            );
            $result = new WP_Query($args);

            if ($result->have_posts()) : ?>
               <?php while ($result->have_posts()) : $result->the_post();
                  $local_timestamp = get_the_time('U');
                  $lastModifiedTime = get_the_modified_time('U');
                  $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
               ?>
                  <div class="blg_col">
                     <div class="blg">
                        <div class="blg_img">
                           <img src="<?php echo $image[0]; ?>">
                        </div>
                        <div class="txts">
                           <div class="time">
                              <h6><?php the_modified_time('jS F, Y'); ?></h6>
                           </div>
                           <h4><?php the_title(); ?></h4>
                           <p>The IGplan team has been working very hard to </p>
                           <a href="javascript:void(0);">Read more <span>
                                 <img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/arw_new.png">
                              </span></a>
                        </div>
                     </div>
                  </div>
               <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>

         </div>
      </div>
      */ ?>
      </div>
</section>





<!--Resoures area end-->
<?php get_footer();
?>