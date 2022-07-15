
<?php if( have_rows('flexible_content') ): echo '<section class="additional-content">';
    while ( have_rows('flexible_content') ) : the_row(); ?>

	<?php if( get_row_layout() == 'tab_content' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="accordian-tabs-module">
			 	<div class="inner-wrap">		 	
			 		<?php if( get_sub_field('section_header')): ?>
						<h2><?php the_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('section_subtext')): ?>
						<p class="column-subtext"><?php the_sub_field('section_subtext'); ?></p>
					<?php endif; ?>

					<ul class="accordion-tabs">
						<?php if( have_rows('tab_content_row') ): while ( have_rows('tab_content_row') ) : the_row(); ?>
							<li class="tab-header-and-content">
								<a href="javascript:void(0)" class="tab-link"><?php the_sub_field('tab_header'); ?></a>
								<div class="tab-content"><?php the_sub_field('tab_body'); ?></div>							
							</li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<?php if( get_sub_field('divider')): ?>
						<hr>
					<?php endif; ?>			
				</div>
			</section>
		<?php endif; ?>

	<?php elseif( get_row_layout() == 'full_width_cta' ): ?>

		<section class="full-width-cta-test">
			<div class="inner-wrap"><h2 class="cta-banner-header"><?php the_sub_field('section_header'); ?></h2></div>
			<section class="fwc-module">
				<div class="inner-wrap">		
					<div class="row cta-banner bottom-baseline">
			            <p class="cta-banner-body"><?php the_sub_field('section_body'); ?></p>	
			       		 <a href="<?php the_sub_field('url'); ?>" class="btn fw-cta" target="_blank"><?php the_sub_field('cta_button'); ?></a>
			        </div>
				</div>
			</section>			
			<?php if( get_sub_field('divider')): ?>
				<div class="inner-wrap"><hr></div>
			<?php endif; ?>
		</section>		
        

 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
 		<section class="multiple-cols-module">
		 	<div class="inner-wrap">	
		 		<?php if( get_sub_field('section_header')): ?>
					<h2><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">

		         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
						<div><?php the_sub_field('content_column'); ?></div>
					<?php endwhile; ?>
					<?php endif; ?>				
				</section>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
 		</section>	

	<?php elseif( get_row_layout() == 'img_gallery_section' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="image-gallery-module">
				<div class="inner-wrap">	
					<?php if( get_sub_field('section_header')): ?>
						<h2><?php the_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<section class="<?php if (get_sub_field('number_columns') == '2') {
								echo 'rows-of-2';
							} else if (get_sub_field('number_columns') == '3') {
							        echo 'rows-of-3';
							} else if (get_sub_field('number_columns') == '4') {
							        echo 'rows-of-4';
							}
							?>">
						<?php $images = get_sub_field('img_gallery');
							if( $images ): ?>
								<?php foreach( $images as $image ): ?>
			                    	<a href="<?php echo $image['sizes']['large']; ?>" class="lightbox loop-item">
				                    	<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/>
			                    		<h4 class="li-title"><?php echo $image['caption']; ?></h4>
			                    	</a>
								<?php endforeach; ?>
							<?php endif; ?>
					</section>
					<?php if( get_sub_field('divider')): ?>
							<hr>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>
		
		
	<?php elseif( get_row_layout() == 'img_gallery_with_thumbnails' ): ?>
		<section class="image-gallery-with-thumbs">
			<div class="inner-wrap">
				<?php if( get_sub_field('imt_section_header')): ?>
					<h3><?php the_sub_field('imt_section_header'); ?></h3>
				<?php endif; ?>
				<div class="dest-slider flexslider">
				    <ul class="slides">
				    	<?php $images = get_sub_field('imgwt_gallery');
				    	if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					        	<li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
					            	<span class="dest-slider-img"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"></span>
					        	</li>
					        <?php endforeach; ?>
					    <?php endif; ?>
				    </ul>
				</div>
			<?php if( get_sub_field('divider')): ?>
				<hr>
			<?php endif; ?>
			</div>			
		</section>




	<?php elseif( get_row_layout() == 'click_expand' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="click-expand-module">
				<div class="inner-wrap">
					<div class="click-expand <?php if( get_sub_field('spacing')): ?>spacing-bottom<?php endif; ?>">
			          <h3 class="ce-header" tabindex="0"><?php the_sub_field('section_header'); ?></h3>
			          <div class="ce-body"><?php the_sub_field('section_body'); ?></div>
			      	</div>
			    </div>
			</section>	        
		<?php endif; ?>

 			
	<?php elseif( get_row_layout() == 'table' ): ?>
		<section class="tabular-data">
		   <div class="inner-wrap">
		        <?php if( get_sub_field('section_header')): ?>
		            <div class="headexpand-wrap">  
		            	<h2 class="headexpand"><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
							<?php if( get_sub_field('section_header')): ?>
								<h3 class="column-subtext"><?php the_sub_field('section_subtext'); ?></h3>
							<?php endif; ?>
					        <?php if( get_sub_field('table_content')): ?>
					            <div class="table-wrap">
					                <table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
					                	<?php the_sub_field('table_content'); ?>
					                </table>
					            </div>
					        <?php endif; ?>
					        <?php if( get_sub_field('section_header')): ?>
		           </div> 
		           <!--headexpand-wrap END -->
		        <?php endif; ?>

		        <?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>	


	<?php elseif( get_row_layout() == 'product_grid' ): ?>
		<section class="product-grid-module">
			<div class="inner-wrap">
				<?php if( get_sub_field('section_header')): ?>
					<h2 class="carousel-header"><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>

				<div class="<?php if( get_sub_field('carousel')): ?>flexslider<?php endif; ?> product-carousel">
					<ul class="slides">
						<?php if( have_rows('product_row') ): while ( have_rows('product_row') ) : the_row(); ?>
							<li>
								<?php if( have_rows('product_item') ): while ( have_rows('product_item') ) : the_row(); ?>
									<?php 	
																		
										$link = get_sub_field('product_url');
											if( $link ): 
												$link_url = $link['url'];
												$link_title = $link['title'];
												?>
												<a class="product-item" href="<?php echo esc_url($link_url); ?>"> 
													<h2 class="product-header"><?php the_sub_field('product_header'); ?></h2> 
													<span class="product-img">
														<?php if(get_sub_field('product_picture')) : ?>
															<?php $product_picture = get_sub_field('product_picture'); ?>
															   <img class="pmi-img" src="<?php echo $product_picture['url']; ?>" alt="<?php echo $product_picture['title']; ?>" title="<?php echo $product_picture['title']; ?>">
														<?php endif; ?>
													</span>									
													<span class="product-cta"><?php echo esc_html($link_title); ?></span>
												</a>
											<?php endif; ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'text_media' ): ?>
		<section class="text-media-module">
			<div class="inner-wrap">
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>			
		     	<article class="clearfix">	    		
		    		<div class="col-3of9">
		    			<?php the_sub_field('media'); ?>
		    		</div>
		    		<div class="col-6of9 col-last">
			    		<?php if( get_sub_field('section_header')): ?>
						<h2><?php the_sub_field('section_header'); ?></h2>
						<?php endif; ?>
		    			<?php the_sub_field('text'); ?>
		    		</div>	    		
				</article>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>



<?php endif; ?>
<?php endwhile; echo '</section>'; ?>
<?php endif; ?>




