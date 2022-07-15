<!-- Services Section -->
<section class="services_module">
  <div class="inner-wrap">
    <div class="container">
      <div class="if-cell1">
      <?php if( have_rows('services_footer','option') ): while ( have_rows('services_footer','option') ) : the_row(); ?>
      <div class="sm-card">
      <div class="face face1">
      <?php $image = get_sub_field('column_icon','option');
              if( !empty( $image ) ): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            <div class="item1">  
            </div>
            <div class="item2">
              <h6 class="bold_heading"><?php the_field('column_heading','option'); ?></h6>
              <h6 class="light_heading"><?php the_field('column_sub_heading','option'); ?></h6>
            </div>
            <div class="item3">
              <div class="line1"></div>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <p><?php the_field('column_hover_text','option'); ?></p>
            </div>
          </div>  
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- Service Section Ends -->
<!--Site Footer -->
<footer class="site-footer" role="contentinfo">
  <div class="inner-wrap">
    <div class="footer1">
      <div class="col">
        <div class="sf-cell">
          <div class="sf logo">
            <div class="sl-img sf-logo-1">
              <a href="<?php bloginfo('url'); ?>"><?php $logo = get_field('footer_logo_one','option');
              if( !empty($logo) ): ?><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
              <?php endif;?> 
              </a>
            </div>
            <div class="sl-img">
              <a href="<?php bloginfo('url'); ?>"><?php $logo = get_field('footer_logo_two','option');
              if( !empty($logo) ): ?><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
              <?php endif;?>
              </a>
            </div>
          </div>
        </div>
        <div class="sf-cell">
        <?php if( have_rows('links_table','option') ): while ( have_rows('links_table','option') ) : the_row(); ?>
          <ul class="sf-links">
            <?php $link_url = get_sub_field('fm_add_links','option'); ?>
            <li>
              <a href="<?php echo esc_url($link_url['url']); ?>" title="<?php echo esc_html($link_url['title']); ?>"><?php echo esc_html($link_url['title']); ?></a>
            </li>
          </ul>
        <?php endwhile; endif; ?>
        </div>
        <div class="sf-cell">
          <div class="sf-contact">
            <div class="sf-item">
              <?php $image = get_sub_field('footer_phone_icon','option');
              if( !empty( $image ) ): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
              <a href="tel:<?php the_field('phone_number','option');?>" class="sh-ph" target="_blank" aria-label="Phone Number"><?php the_field('phone_number','option');?>
            </a>
          </div>
          <div class="sf-item">
            <?php $image = get_sub_field('footer_email_icon','option');
            if( !empty( $image ) ): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <a href="mailto: <?php the_field('email_address','option');?>" class="sh-email" target="_blank" aria-label="Email Address"><?php the_field('email_address','option');?>
            </a>
          </div>
          <?php if( have_rows('footer_social_profiles','option') ): while ( have_rows('footer_social_profiles','option') ) : the_row(); ?>    
          <ul class="sf-item">
            <li>
              <?php $link_url = get_sub_field('social_link','option'); ?>
              <a href="<?php echo esc_url($link_url); ?>" title="<?php the_sub_field('social_link_title') ?>" target="_blank" rel="nofollow noreferrer">
              <?php $sp_social_icon = get_sub_field('sp_social_icon','option');
              if( !empty($sp_social_icon) ): ?><img src="<?php echo $sp_social_icon['url']; ?>" alt="<?php echo $sp_social_icon['alt']; ?>">
              <?php endif; ?>
              </a>
            </li>
          </ul>
        <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="sf-cell">
        <div class="sf-subscribe">
          <h6 class="sf-heading"><?php the_sub_field('sn_heding','option'); ?></h6>
          <div class="sf-email1">
            <input type="email" placeholder="Enter your E-Mail Address" class="email_field">
          </div>
          <div class="sf-submit">
            <button type="submit" class="email_submit">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
    <div class="hl"></div>
    <div class="footer2">
      <div class="sf-small">
        <div class="inner-wrap">
          <p>Copyright 2022 © <?php bloginfo('name'); ?>All Right Reserved | Designed & Developed by <a href="https://bridgekash.com/" target="_blank">Bridgekash Internatonal Pvt. Ltd.</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
<!-- section last footer -->
<section class="last_footer">
  <div class="inner-wrap">
    <h6><?php the_sub_field('ps_heading','option'); ?></h6>
    <div class="if-col">
      <div class="lf-cell">
      <?php if( have_rows('ps_menu','option') ): while ( have_rows('ps_menu','option') ) : the_row(); ?>
        <div class="lf-head1">
          <h6 class="light"><?php the_sub_field('links','option'); ?></h6>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
        <div class="lf-head2">
          <h6 class="light">Smart Storage Jar | Fresh Storage Jar | Twister Jar | Steelite Mini Jar</h6>
        </div>
      </div>
      <!-- <div class="lf-cell">
        <div class="lf-head1">
          <h6 class="light">Mapple Series</h6>
        </div>
        <div class="lf-head2">
          <h6 class="light">Exotic Twister Jar | Nx Twister Jar</h6>
        </div> -->
      </div>
    </div>
  </div>
</section>