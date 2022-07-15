<!--Site Header-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/search-module' ) ); ?>
<!-- Site header wrap start-->
<div class="site-header-wrap"> 
  <header class="site-header" role="banner">
    <!-- Notification Bar -->
    <div class="notification-bar">
          <div class="inner-wrap">
            <div class="nb-contact-mobile">
              <div class="nb-item">
              <img src="<?php bloginfo('template_url'); ?>/img/phone-call copy (1).png" alt="">
              <a href="tel:<?php the_field('phone_number','option');?>" class="nb-phone" aria-label="Phone Number"><?php the_field('phone_number','option');?></a>
              </div>
              <div class="nb-item">
              <img src="<?php bloginfo('template_url'); ?>/img/email copy (1).png" alt="">
            <a href="mailto:<?php the_field('email_address','option');?>" class="nb-email" aria-label="Email Address"><?php the_field('email_address','option');?></a>
              </div>
            </div>
            <div class="notification-cell1">
              <p><marquee direction="left"><?php the_field('scrolling_notice','option');?></marquee></p>
            </div>
            <div class="notification-cell2">
              <ul class="sf-social">
              <?php if( have_rows('notification_social_profiles','option') ): while ( have_rows('notification_social_profiles','option') ) : the_row(); ?>
                <li>
                <a href="<?php the_sub_field('social_link','option') ?>" title="<?php the_sub_field('social_link','option') ?>" target="_blank" rel="nofollow noreferrer">
                    <?php $footer_social_icon = get_sub_field('sp_social_icon','option');
                    if( !empty($sp_social_icon) ): ?>
                        <img src="<?php echo $sp_social_icon['url']; ?>" alt="<?php echo $sp_social_icon['alt']; ?>">
                <?php endif; ?>
              </a>
                </li>
                <?php endwhile; endif; ?>
                </ul>
            </div>
          </div>
        </div>
<!-- Notification Bar Ends -->
 <!--Site Search -->
<div class="search-module">
  <div class="inner-wrap">
    <form action="/" method="get" class="search-form">
      <div class="search-table">
        <div class="search-row">
          <div class="search-cell1">
            <input type="text" id="search-site" value="" placeholder="Search Website..." name="s"
            class="search-text" title="Search Website..." tabindex="-1" aria-label="Search Website...">
          </div>
          <div class="search-cell2">
            <input class="search-submit" alt="Search" title="Search" value="" type="submit" tabindex="-1"
            aria-label="Search">
          </div>
          <div class="search-cell3">
            <a href="javascript:void(0)" target="_blank" class="search-link search-exit active" tabindex="-1"
            aria-label="Close Search Module"><img src="img/ico-exit.svg" alt="Exit"></a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
  <!--Site Search Ends -->
  <!--Site Header Starts -->
  <div class="header">
          <div class="inner-wrap">
            <div class="header-row">
              <div class="sh-cell1">
                <div class="sh-item">
                <img src="<?php bloginfo('template_url'); ?>/img/phone-call copy.png" alt="">
              <a href="tel:<?php the_field('phone_number','option');?>" class="sh-ph" target="_blank" aria-label="Phone Number"><?php the_field('phone_number','option');?>
              </a>
                </div>
                <div class="sh-item">
                <img src="<?php bloginfo('template_url'); ?>/img/email copy.png" alt="">
              <a href="mailto: <?php the_field('email_address','option');?>" class="sh-email" target="_blank" aria-label="Email Address"><?php the_field('email_address','option');?>
              </a>
                </div>
              </div>
              <div class="sh-cell2">
              <a href="<?php bloginfo('url'); ?>" class="site-logo">
              <?php $logo = get_field('header_company_logo','option');
              if( !empty($logo) ): ?><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
              <?php endif;?>
              </a>
              </div>
              <div class="sh-cell3">
                <span class="sh-icons">
                  <a class=" user-link" aria-label="user Icon" target="_blank" href="<?php bloginfo('url'); ?>/my-account"><img src="<?php bloginfo('template_url'); ?>/img/user.png" alt=""></a>
                  <?php 
              if ( is_user_logged_in() ) {
                $current_user = wp_get_current_user();
                echo 'Welcome, ' . $current_user->user_login . '!';
              } else {
                echo 'My Account';
              }
              ?>
                  <a class=" search-link" target="_blank" href="#" aria-label="Search Icon"><img src="<?php bloginfo('template_url'); ?>/img/search.png" alt=""></a>
                  <a class=" cart-link" target="_blank" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>" aria-label="cart Icon">
                  <span><?php echo WC()->cart->cart_contents_count; ?></span>
                  <img src="<?php bloginfo('template_url'); ?>/img/shopping-cart.png" alt="<?php _e( 'View your shopping cart' ); ?>"></a>
                  <a href="#menu" class="sh-ico-menu menu-link" aria-label="Menu Icon"></a>
                </span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sh-sticky-wrap">
          <!--Site Nav-->
          <div class="site-nav-container">

            <div class="snc-header">
              <a href="#" class="close-menu menu-link" aria-label="Close Menu"></a>
            </div>
            <nav class="site-nav">
            <ul class="sn-level-1">
                <li class="sn-li-l1">
                  <a href="#"><span>Home</span></a>
                </li>
                <li class="sn-li-l1">
                  <a href="#"><span>About Us</span></a>
                </li>
                <li class="sn-li-l1 menu-item-has-children">
                  <a href="#"><span>Shop</span></a>
                  <ul class="sn-level-2">
                    <li class="sn-li-l2">
                      <a href="#"><span>Category 1</span></a>
                    </li>
                    <li class="sn-li-l2">
                      <a href="#"><span>Category 2</span></a>
                    </li>
                    <li class="sn-li-l2">
                      <a href="#"><span>Category 3</span></a>
                    </li>
                  </ul>
                </li>
                <li class="sn-li-l1">
                  <a href="#"><span>Mapple Series</span></a>
                </li>
                <li class="sn-li-l1 menu-item-has-children">
                  <a href="#"><span>Gifting</span></a>
                  <ul class="sn-level-2">
                    <li class="sn-li-l2">
                      <a href="#"><span>Gifting 1</span></a>
                    </li>
                    <li class="sn-li-l2">
                      <a href="#"><span>Gifting 2</span></a>
                    </li>
                  </ul>
                </li>
                <li class="sn-li-l1">
                  <a href="#"><span>Contact Us</span></a>
                </li>
                <li class="btn1">
                  <button class="download_btn">download catalogue</button>
                </li>
              </ul>
            </nav>

          </div><!-- site-nav-container END-->
          <a href="" class="site-nav-container-screen menu-link">&nbsp;</a>

        </div>     
        
  </header>
    
</div>
<!-- Site header wrap end-->