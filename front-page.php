<?php
	/*
		Template Name: Front Page
	*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/site-intro' ) ); ?>
<!--Site Content-->
<section class="site-content" role="main">
<?php if( have_rows('flexible_modules') ): ; while ( have_rows('flexible_modules') ) : the_row(); ?>
<?php if( get_row_layout() == 'home_second_module' ): ?>	
  <!-- Second Module Starts -->
  <section class="second-module" role="main">
    <div class="inner-wrap">
			<div class="container">
				<div class="container1">
					<div class="sc-cell1" style="background: url(<?php the_sub_field('background_image_rectangle'); ?>);">
						<div class="sc-cell1-txt">
							<h2 class="sc-heading"><?php the_sub_field('heading_rectangle_one'); ?></h2>
							<p><?php the_sub_field('description_rectangle_one'); ?></p>
						</div>
					</div>
					<div class="sc-cell2" style="background: url(<?php the_sub_field('background_image_rectangle_two'); ?>);">
						<div class="sc-cell1-txt">
							<h2 class="sc-heading"><?php the_sub_field('heading_rectangle_two'); ?></h2>
							<p><?php the_sub_field('description_rectangle_two'); ?></p>
						</div>
					</div>
				</div>
				<div class="container2">
					<div class="sc-cell3" style="background: url(<?php the_sub_field('background_image_big_rectangle'); ?>);">
						<div class="sc-cell3-txt">
							<h2 class="sc-heading" id="heading_red"><?php the_sub_field('heading_rectangle_three'); ?></h2>
							<p id="para_white"><?php the_sub_field('description_rectangle_three'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Second Module Ends -->

  <!-- Featured Products Tabular Slider Starts -->
  <?php elseif( get_row_layout() == 'featured_products_tabular_slider' ): ?>
	<section class="product">
    <div class="inner-wrap">
      <div class="upper_heading">
        <hr class="line"><h6><?php the_sub_field('module_heading'); ?></h6>
      </div>
      <h1 class="ps-heading"><?php the_sub_field('module_title'); ?></h1>
      <?php if( have_rows('category_tab') ): while ( have_rows('category_tab') ) : the_row(); ?>
      <div class="dest-tab">
        <?php if( have_rows('product_slider') ): while ( have_rows('product_slider') ) : the_row(); ?>
        <ul class="accordion-tabs">
          <li class="tab-header-and-content">
            <a href="<?php the_sub_field('tab_id'); ?>" class="tab-link"><?php the_sub_field('product_category'); ?></a>
            <div class="tab-content">
              <?php if( have_rows('products') ): while ( have_rows('products') ) : the_row(); ?>
              <div class="tab-items">
                <div class="tab-product-item">
                  <a href="<?php the_sub_field('button_link'); ?>" class="p-item">
                    <span class="p-image">
                      <div class="images">
                      <?php $image = get_sub_field('product_image');
                      if( !empty( $image ) ): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      <?php endif; ?>
                      </div>
                      <div class="title">
                        <h6 class="p-title"><?php the_sub_field('product_name'); ?></h6>
                        <h6 class="rupees">₹ <?php the_sub_field('product_price'); ?></h6>
                        <a href="#" class="btn buy-btn"><?php the_sub_field('product_price'); ?></a>
                      </div>
                    </span>
                  </a>
                </div>
              </div>
              <div class="view-all-btn">
                <a href="<?php bloginfo('url'); ?>/shop" class="btn va-btn"> View All </a>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <!-- <a href="#" class="btn"> View All</a> -->
          </li>
        </ul>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <!-- Featured Products Tabular Slider Ends -->

  <!-- Shop By Category Section Starts -->
  <?php elseif( get_row_layout() == 'shop_by_category' ): ?>
  <section class="shop">
    <div class="inner-wrap">
      <div class="upper_heading">
        <hr class="line">
        <h6><?php the_sub_field('upper_heading'); ?></h6>
      </div>
      <h2 class="lower_heading"><?php the_sub_field('section_heading'); ?></h2>
      <div class="shop-cell1">
        <?php if( have_rows('category_items') ): while ( have_rows('category_items') ) : the_row(); ?>
        <div class="box1">
          <div class="box">
            <?php $image = get_sub_field('category_image');
            if( !empty( $image ) ): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?> 
      </div>
    </div>
  </section>
  <!-- Shop By Category Section Ends -->

  <!-- Video Section Starts  -->
  <?php elseif( get_row_layout() == 'video_module' ): ?>
  <section class="videos">
    <div class="inner-wrap">
      <div class="upper_heading">
        <hr class="line">
        <h6><?php the_sub_field('upper_heading'); ?></h6>
      </div>
      <h2 class="lower_heading"><?php the_sub_field('section_heading'); ?></h2>
      <div class="rows-of-3 v-cell1">
      <?php if( have_rows('video_items') ): while ( have_rows('video_items') ) : the_row(); ?>
        <ul class="v-item">
          <li class="video">
            <a href="<?php the_sub_field('video_link'); ?>" class="popup-youtube">
            <figure>
              <?php $image = get_sub_field('video_image');
              if( !empty( $image ) ): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="video-thumbnail"/>
              <?php endif; ?>
            </figure>
            <div class="overlay">
              <figure>
                <img src="<?php bloginfo('template_url'); ?>/img/play-button.svg" alt="" class="play-btn">
              </figure>
            </div>
            </a>
          </li>
          <li class="content">
            <h3 class="video_title"><?php the_sub_field('video_title'); ?></h3>
          </li>
        </ul>
        <?php endwhile; ?>
        <?php endif; ?> 
      </div>
    </div>
  </section>
  <!-- Video Section Ends  -->

  <!-- Testimonial Section Starts -->
  <?php elseif( get_row_layout() == 'testimonials_modules' ): ?>
  <section class="multiple-item-slider review-section">
    <div class="inner-wrap">
      <div class="upper_heading">
        <hr class="line">
        <h6><?php the_sub_field('upper_heading'); ?></h6>
      </div>
      <h2 class="lower_heading"><?php the_sub_field('section_heading'); ?></h2>
      <div class="mis-slider">
      <?php if( have_rows('testimonials_item') ): while ( have_rows('testimonials_item') ) : the_row(); ?>
        <a href="#" class="mis-item">
          <div class="get_a_card ">
            <img src="<?php bloginfo('template_url'); ?>/img/inverted-commas.png" class="get_a_card_coma_img">
            <?php $image = get_sub_field('user_photo');
            if( !empty( $image ) ): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="get_a_card_img"/>
            <?php endif; ?> 
            <h1 class="get_a_card_heading"><?php the_sub_field('user_name'); ?></h1>
            <p class="get_a_card_para"><?php the_sub_field('user_message'); ?></p>
            <div class="get_a_card_star_div">
              <?php if( have_rows('star_bucket') ): while ( have_rows('star_bucket') ) : the_row(); ?>
              <?php $image = get_sub_field('star');if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- Testimonial Section Ends -->
  <!--Our Story -->
  <?php elseif( get_row_layout() == 'about_us_module' ): ?>
  <section class="our-story story-desktop-view">
    <div class="inner-wrap">
      <div class="rows-of-2 story-content">
        <div class="img-side">
            <?php $image = get_sub_field('about_image');
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  class="our_story_card-img"/>
            <?php endif; ?>
        </div>
        <div class="text-side">
          <div class="upper_heading1">
            <hr class="line2">
            <h6><?php the_sub_field('upper_heading'); ?></h6>
          </div>
          <h2 class="lower_heading1"><?php the_sub_field('section_heading'); ?></h2>
          <div class="our_story_card_content">
            <p><?php the_sub_field('about_desc'); ?></p>
          </div>
          <a href="<?php the_sub_field('button_link'); ?>" class="our_story_card_btn"><?php the_sub_field('button_text'); ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Story Mobile View -->
  <?php elseif( get_row_layout() == 'about_us_module' ): ?>
  <section class="our-story story-mobile-view">
    <div class="inner-wrap">
      <div class="rows-of-2 story-content">
        <div class="text-top text-side">
          <div class="upper_heading1">
            <hr class="line2">
            <h6><?php the_sub_field('upper_heading'); ?></h6>
          </div>
          <h2 class="lower_heading1"><?php the_sub_field('section_heading'); ?></h2>
          <div class="our_story_card_content">
            <p><?php the_sub_field('about_desc'); ?></p>
          </div>
        </div>
        <div class="img-side">
          <?php $image = get_sub_field('star-img');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  class="our_story_card-img"/>
          <?php endif; ?>
        </div>
        <div class="text-side m-btn">
          <a href="<?php the_sub_field('button_link'); ?>" class="our_story_card_btn"><?php the_sub_field('button_text'); ?></a>
        </div>
      </div>
    </div>
  </section>

  <!--Our Story End-->
<?php endif; ?>		
<?php endwhile; ?>
<?php endif; ?>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/resource-module' ) ); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>