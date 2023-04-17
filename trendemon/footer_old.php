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

<div class="modal fade demo_modal" id="demo_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">See Trendemon on your own site - <span>no code needed!</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cancel.png" alt="">
          </button>
        </div>
        <div class="modal-body">
            <div class="demo_form">
                <?php echo do_shortcode('[contact-form-7 id="1971" title="Demo form"]'); ?>
            </div>
            <div class="demo_term">
                <p>By submitting this form, I agree to Trendemon's <a target="_blank" href="https://trendemon.com/privacy.html?v=2019">privacy policy</a>.</p>
            </div>
        </div>
      </div>
    </div>
</div>

<style>
#wpcf7-f1971-o1 .wpcf7-mail-sent-ok{
	z-index: 999999999;
    background: white;
    display: block;
    top: -40px;
	font-size: 24px;
	padding:20px 35px;
	line-height:1.4;
	color: #f53e72;
}

h5#exampleModalLabel{
padding: 0 20px;	
}

.demo_modal .demo_input .form-control{
	line-height:50px;
}

.demo_modal .demo_input{
	margin-bottom:15px;
}

</style>
<!--<div class="modal fade demo_modal" id="demo_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Request a <span>trendemon demo</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cancel.png" alt="">
          </button>
        </div>
        <div class="modal-body">
            <div class="demo_form">
                <?php echo do_shortcode('[contact-form-7 id="257" title="Demo form"]'); ?>
            </div>
            <div class="demo_term">
                <p>By submitting this form, I agree to Trendemon's <a target="_blank" href="https://trendemon.com/privacy.html?v=2019">privacy policy</a>.</p>
            </div>
        </div>
      </div>
    </div>
</div>-->


<!--
<div class="modal fade demo_modal" id="demo_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="padding-top: 10px !important"> 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cancel.png" alt="">
          </button>
        </div>
        <div class="modal-body">			
            <div class="modal_left">
			<h5 class="modal-title" id="exampleModalLabel" style="font-size:25px !important">
			<span style="color:#f53e72">Find out More</span><br/>
		  Schedule a call via <span>Calendly</span></h5>
				<p class='big_text'>
				Are you blind to your content’s true impact on the customer's journey?  Start our 2-month trial and see how TrenDemon can help you hit your MQL targets. Join a 20-minute call to find out more.
				</p>
				
				<p class='small_text'>
				Learn how you can align your website and content to your marketing efforts, without complex onboarding or bloated platforms.
				</p>
				
				<a style="padding: 0 50px !important; margin-top:20px !important;"  href="https://calendly.com/haimcohenmintz/20-minute-trendemon-intro" class="basic_btn" target="_blank">Schedule</a>
			</div>
			<div class="modal_right">
				<img src="https://trendemon.com/img/calendly.png" style="padding-left: 20px;" />
			</div>
			
        </div>
      </div>
    </div>
</div>
-->

<style>
@media (min-width: 576px){
#demo_modal .modal-dialog {
    max-width: 750px;
}

.modal_left{
	float:left; width:55%
}

.modal_right{
float:right; width:45%	
}	

.big_text{
	line-height: 1.4 !important;
	display: block;
}

.small_text{
	display:none;
}

}

@media (max-width: 575px){
.modal_left{
	width:100%
}

.modal_right{
display:none;
}

.small_text{
	line-height: 1.4 !important;
	display: block;
}

.big_text{
	display: none;
}

}
</style>


<!--wave svg-->
    <div class="only_wave snd_wave">
        <div class="ftr_wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2259 674" id="el_W5FebNv4n">
                <style>@-webkit-keyframes kf_el_t_15nr-eoS_an_6k4Pf9gVA{0%{-webkit-transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);}50%{-webkit-transform: translate(0px, 0px) translate(0px, 0px) translate(100px, 0px);transform: translate(0px, 0px) translate(0px, 0px) translate(100px, 0px);}100%{-webkit-transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);}}@keyframes kf_el_t_15nr-eoS_an_6k4Pf9gVA{0%{-webkit-transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);}50%{-webkit-transform: translate(0px, 0px) translate(0px, 0px) translate(100px, 0px);transform: translate(0px, 0px) translate(0px, 0px) translate(100px, 0px);}100%{-webkit-transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);}}@-webkit-keyframes kf_el_RIJ8cFbnnG_an_5jLLDYSvU{0%{-webkit-transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);}50%{-webkit-transform: translate(0px, 30px) translate(0px, -30px) translate(-120px, -10px);transform: translate(0px, 30px) translate(0px, -30px) translate(-120px, -10px);}100%{-webkit-transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);}}@keyframes kf_el_RIJ8cFbnnG_an_5jLLDYSvU{0%{-webkit-transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);}50%{-webkit-transform: translate(0px, 30px) translate(0px, -30px) translate(-120px, -10px);transform: translate(0px, 30px) translate(0px, -30px) translate(-120px, -10px);}100%{-webkit-transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);}}@-webkit-keyframes kf_el_C9XnUQ6nP4_an_WrQJfT9gb{0%{-webkit-transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);}50%{-webkit-transform: translate(0px, 74px) translate(0px, -74px) translate(150px, 0px);transform: translate(0px, 74px) translate(0px, -74px) translate(150px, 0px);}100%{-webkit-transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);}}@keyframes kf_el_C9XnUQ6nP4_an_WrQJfT9gb{0%{-webkit-transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);}50%{-webkit-transform: translate(0px, 74px) translate(0px, -74px) translate(150px, 0px);transform: translate(0px, 74px) translate(0px, -74px) translate(150px, 0px);}100%{-webkit-transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);}}#el_W5FebNv4n *{-webkit-animation-duration: 5s;animation-duration: 5s;-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite;-webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);animation-timing-function: cubic-bezier(0, 0, 1, 1);}#el_t_15nr-eoS{fill: #efeff9;fill-rule: evenodd;}#el_RIJ8cFbnnG{fill-rule: evenodd;fill: #bfbfdc;opacity: 0.3;}#el_C9XnUQ6nP4{fill-rule: evenodd;fill: #333c4e;}#el_C9XnUQ6nP4_an_WrQJfT9gb{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;-webkit-transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);transform: translate(0px, 74px) translate(0px, -74px) translate(0px, 0px);-webkit-animation-name: kf_el_C9XnUQ6nP4_an_WrQJfT9gb;animation-name: kf_el_C9XnUQ6nP4_an_WrQJfT9gb;-webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);}#el_RIJ8cFbnnG_an_5jLLDYSvU{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;-webkit-transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);transform: translate(0px, 30px) translate(0px, -30px) translate(0px, 0px);-webkit-animation-name: kf_el_RIJ8cFbnnG_an_5jLLDYSvU;animation-name: kf_el_RIJ8cFbnnG_an_5jLLDYSvU;-webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);}#el_t_15nr-eoS_an_6k4Pf9gVA{-webkit-animation-fill-mode: backwards;animation-fill-mode: backwards;-webkit-transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);transform: translate(0px, 0px) translate(0px, 0px) translate(0px, 0px);-webkit-animation-name: kf_el_t_15nr-eoS_an_6k4Pf9gVA;animation-name: kf_el_t_15nr-eoS_an_6k4Pf9gVA;-webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);}</style>
      <defs>
        
      </defs>
      <g id="el_t_15nr-eoS_an_6k4Pf9gVA" data-animator-group="true" data-animator-type="0"><path id="el_t_15nr-eoS" data-name="Rectangle 5 copy 2" d="M0,0S92.47,34,239.993,34C331.666,34,444.6,0,569.807,0c113.61,0,312.63,30,439.753,30,123.33,0,264.93-30,388.55-30,119.53,0,236.34,30,344.87,30C1862.37,30,1956.7,0,2048.7,0,2222.52,0,2259,20,2259,20V600H0V0Z"/></g>
      <g id="el_RIJ8cFbnnG_an_5jLLDYSvU" data-animator-group="true" data-animator-type="0"><path d="M2259,42s-72.47,24-219.99,24c-91.68,0-224.61-28-349.82-28-113.61,0-237.33,20-364.45,20-123.33,0-249.87-28-373.488-28C831.716,30,714.911,82,606.378,82,486.985,82,377.6,42,285.6,42,111.776,42,0,62,0,62V642H2259V42Z" id="el_RIJ8cFbnnG"/></g>
      <g id="el_C9XnUQ6nP4_an_WrQJfT9gb" data-animator-group="true" data-animator-type="0"><path id="el_C9XnUQ6nP4" data-name="Rectangle 5 copy" d="M0,74s92.47,26,239.993,26c91.673,0,204.6-26,329.814-26,113.61,0,237.33,32,364.452,32,123.331,0,249.871-32,373.491-32,119.53,0,232.34,22,340.87,22,119.39,0,232.78-22,324.78-22C2147.22,74,2259,94,2259,94V674H0V74Z"/></g>
            </svg>
        </div>
    </div>
    <!--wave svg-->

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
							
								<?php echo do_shortcode('[mc4wp_form id="349"]'); ?>
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