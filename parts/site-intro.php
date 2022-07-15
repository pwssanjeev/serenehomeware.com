<!--Site Intro Starts-->
<section class="site-intro">
  <div class="si-slider">
    <?php if( have_rows('si_slider') ): while ( have_rows('si_slider') ) : the_row(); ?>
      <div class="si-item">
        <div class="si-bg-img desktop-view"
          style="background-image: url(<?php the_sub_field('background_banner'); ?>);"></div>
        <div class="si-bg-img mobile-view" style="background-image: url(<?php the_sub_field('background_image_mobile'); ?>);"></div>
        <div class="inner-wrap">
          <div class="si-content">
            <div class="si-content1">
              <h1 class="si-header"><?php the_sub_field('si_heading'); ?></h1>
              <h2 class="si-sub-heading"> India's most Trusted Brand for <span>Kitchenware</span> </h2>
              <a href="<?php the_sub_field('si_link'); ?>" class="btn si-btn"><?php the_sub_field('btn_text'); ?></a>
            </div>
            <div class="si-img">
              <?php $image = get_sub_field('si_img');
                if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>               
  </div>
</section>
<!--Site Intro Ends-->