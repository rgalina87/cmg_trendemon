<?php
   /* Template Name: Compare Landing Page */

   /*
   * legassy template form previos programmer. 
   * changelog: 
   * changed ACF layout for better control
   * css removed from inline to enqueue.php
   * removed script opening form on CTA and added CTA contorl
   * removed preloaded on header
   */
   get_header('landing');
   ?>
		
	<section class="block-section">
		<div class="container compare_container">
			<div class="step_row">
				<div class="step_itm">
					<div class="step_txt">
						<h1><?php the_field('page_title'); ?></h1>
						<p><?php the_field('page_subtitle'); ?></p>
						<?php 
							$new_window = get_field('new_window');
							if ($new_window =='yes'){
								$target = "target='_blank'";
							} else {
								$target = '';
							}
						?>
						<p><a class="basic_btn small_basic_btn" href="<?php the_field('start_now_link'); ?>" <?php echo $target;?> >Start Now</a></p>		
					</div>
				</div>
				<div class="step_itm">
					<img src="<?php the_field('main_image'); ?>" alt="">
				</div>
			</div>
		</div>
	</section>
	
	<section class="block-section">
		<div class="container compare_container" style="text-align:center">
			<h3 class="al-center">Trusted By:</h3>
			<img class="img_trusted" src="https://trendemon.com/wp-content/uploads/2020/09/logos5.png" />
			<img class="img_trusted" src="https://trendemon.com/wp-content/uploads/2020/09/logos2.png" />
			<img class="img_trusted" src="https://trendemon.com/wp-content/uploads/2020/09/logos3.png" />
			<img class="img_trusted" src="https://trendemon.com/wp-content/uploads/2020/09/logos1.png" />
			<img class="img_trusted" src="https://trendemon.com/wp-content/uploads/2020/09/logos4.png" />
			<img class="img_trusted" src="https://trendemon.com/wp-content/uploads/2020/09/logos6.png" />
		</div>
	</section>
	<section class="block-section">
		<div class="container compare_container">
			<?php 
				$top_banner =get_field('top_banner');
			?>
			<h3 class="al-center"><?php echo $top_banner['top_banner_title']; ?></h3>
			<p class="al-center cmp-padding"><?php echo $top_banner['top_banner_text']; ?></p>
		</div>

		<div class="container compare_container">
			<table class="compare_table">
				<tr class="table_logos">
					<td></td>
					<td class="trd_logo">
						<div style="background: <?php the_field('trendemon_bg')?>">
							<img src="<?php the_field('trendemon_logo')?>" />
							<img src="<?php the_field('trendemon_badge'); ?>" class="trd_badge" alt="">
						</div>
					</td>
					<td class="other_logo">
						<div style="background: <?php the_field('other_company_bg')?>; margin-top:20px;">
							<img src="<?php the_field('other_company_logo')?>" />
						</div>
					</td>
				</tr>
				<?php 
				$i = 0;
				while(the_repeater_field('compare_table')):
				?>
					<?php if ($i==0) {?>
					<tr class="lp_dark cmp_round_border_top">
					<?php } else if ($i % 2) {?>
					<tr class="lp_light">
					<?php } else { ?>
					<tr class="lp_dark">
					<?php } ?>
						<td><?php the_sub_field('row_title'); ?></td>
						<?php if ($i % 2) {?> <td class="lp_trd_light"><?php } else { ?><td class="lp_trd_dark"><?php } ?>
							<span class='cmp_<?php the_sub_field('row_trendemon_value_color')?>'>
								<?php the_sub_field('row_trendemon_value'); ?>
							</span>
						</td>
						<td>
							<span class='cmp_<?php the_sub_field('row_other_company_value_color')?>'>
								<?php the_sub_field('row_other_company_value'); ?>
							</span>
						</td>
					</tr>					
				<?php
				$i++;
				endwhile; ?>
				<tr class="lp_dark cmp_round_border_bottom">
					<td><img src='https://trendemon.com/wp-content/uploads/2022/02/g2-logo.png' style="width:30px;" /> Score</td>
					<?php if ($i % 2) {?> <td class="lp_trd_light"><?php } else { ?><td class="lp_trd_dark"><?php } ?>
						<span>
							<?php the_field('trendemon_g2_score'); ?> 
							<a href="<?php the_field('g2_score_link');?>" target="_blank">
								<?php  get_score_img(get_field('trendemon_g2_score')); ?> 
							</a>
					</td>
					<td>
						<span>
							<?php the_field('other_company_g2_score'); ?> 
							<a href="<?php the_field('g2_score_link');?>" target="_blank">
								<?php  get_score_img(get_field('other_company_g2_score')); ?> 
							</a>
						</span>
					</td>
				</tr>
			</table>
		</div>
	</section>
	
	<section class="block-section">
		<div class="container compare_container compare_blocks">
			<h3 class="align_center">Trendemon improves your content ROI</h2>
			<div class="lp_flex">
				<?php 
				while(the_repeater_field('content_roi')):
				?>
				<div class="cmp_blg_col">
					<div>
						<img src="<?php the_sub_field('content_roi_img'); ?>" alt="">
						<p><b><?php the_sub_field('content_roi_title'); ?></b></p>
						<p><?php the_sub_field('content_roi_text'); ?></p>
					</div>
					</div>						
				<?php
				endwhile; ?>		
		</div>
	</section>
	
	<section class="block-section">
		<div class="container compare_container compare_blocks">
			<h3 class="align_center">Features</h2>
			<div class="lp_flex lp_flex_white">
				<?php 
				while(the_repeater_field('features')):
				?>
				<div class="cmp_blg_col blog_col_white">
					<div>
						<img src="<?php the_sub_field('feature_icon'); ?>" alt="">
						<p><?php the_sub_field('feature_text'); ?></p>
					</div>
					</div>						
				<?php
				endwhile; ?>		
		</div>
	</section>
	
	<?php 
		$quote =get_field('quote');
	?>
	<section class="block-section">
		<div class="container compare_container">
			<div class="comp_quotes">
				<img src="https://trendemon.com/wp-content/uploads/2022/02/quotes_bg_1.jpg" />
				<div><?php echo $quote['quote_text']; ?></div>
				<p><?php echo $quote['quote_author']; ?></p>
				<img src="https://trendemon.com/wp-content/uploads/2022/02/quotes_bg_2.jpg" style="float:right" />
			</div>
		</div>
	</section>
	
	<section class="block-section">
		<div class="container compare_container">
			<div class="step_row step_int">
				<div class="step_itm">
					<div class="step_txt">
						<?php 
							$integration = get_field('integrations');
						?>
						<h4><?php echo $integration['integrations_title']; ?></h4>
						<?php echo $integration['integrations_text']; ?>
					</div>
				</div>
				<div class="step_itm">
					<img src="<?php echo $integration['integration_image']; ?>" alt="" />
				</div>
			</div>
		</div>
	</section>
	
	<section class="block-section last-section">
		<div class="container compare_container compare_blocks">
			
				<div id="journey_banner" style="margin: 20px auto">
				<?php  the_field('bottom_banner'); ?>				
				  <a class="cmpcta_btn" href="<?php  the_field('cta_url'); ?>"><?php  the_field('cta_title'); ?></a>
				</div>
			
			
			<?php /* CMG: removed
			
			<span id="compare_form_anchor" name="compare_form_anchor"></span>
			<div id="compare_form" style="display:none; min-height: 100px">
				<div class="trd-ph-embedded" data-group="compare_form"></div>
			</div>
			*/ ?>
			
		</div>
	</section>


<?php get_footer(); ?>   


<?php /* CMG: removed
<script>
var btn = document.getElementById("toggle");
btn.onclick = function () {
  $("#journey_banner").hide();
  $("#compare_form").show();
  $('html,body').animate({scrollTop: $("#compare_form_anchor").offset().top},'slow');
  window.trd_api?trd_api.goal({goalId:6534}):(window.$TRD_goals=(window.$TRD_goals||[])).push({goalId:6534});
};

</script>
*/ ?>

<?php 
function get_score_img($score){
	$score_img = str_replace('.', '_', $score);
		echo "<img class='score_img' src='https://trendemon.com/wp-content/uploads/2022/02/".$score_img.".png' />";
}
?>