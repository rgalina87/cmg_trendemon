<?php
   /* Template Name: contact */
   get_header();
   ?>	
	<section id="banner_sec" class="banner_sec contact_bnr_frm">
        
    </section>


	
	<!--Demo section start-->
    <section class="demo_outer">
        <div class="demo_inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="demo_left">
                            <h2><?php the_field('side_text_title'); ?></h2>
                            <h5><?php the_field('side_text_subtitle'); ?></h5>
                            <div class="setup_list">
                                <?php the_field('side_text'); ?>
                            </div>
                            <div class="brand_list">
                                <h5><?php the_field('brands_header'); ?></h5>
								<div style="margin-left:-10px;">
                                <!--<ul class="listfr_brnd">-->
                                	<?php while(the_repeater_field('brands_logo')): ?>  
                                	    <!--<li>-->
                                            <span><?php the_sub_field('logo', false, false); ?></span>
                                	    <!--</li>-->
                                	<?php endwhile; ?>
                                <!--</ul>-->
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="demo_right">
                            <div class="dform_heading">
                                <h6><?php the_field('form_subtitle'); ?></h6>
                                <h3><?php the_field('form_title'); ?></h3>
                            </div>
                            <div class="dform_demo">
                                <?php echo do_shortcode(the_field('form_shortcut')); ?>
                            </div>
                        </div>
                    </div>
					<p></p>
                </div>
            </div>
        </div>
    </section>
    <!--Demo section End-->
								
		
				

<?php
get_footer();
