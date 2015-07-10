<div class="container">
	<div class="textimagegrid align-<?php the_field('module_four_image_alignment'); ?>">
			<div class="textimagegrid__content col-4">
				<h2 class="textimagegrid__title"><?php the_field('module_four_image_title'); ?></h2>
				<div class="textimagegrid__subtitle"><?php the_field('module_four_image_subtitle'); ?></div>
				<div class="textimagegrid__text"><?php the_field('module_four_image_text'); ?></div>
			</div>
			<div class="textimagegrid__imagegrid col-8">
			<?php
				if( have_rows('module_four_image_gallery') ):
				  while ( have_rows('module_four_image_gallery') ) : the_row(); ?>
				  	 <?php $image = get_sub_field('four_image_grid_image');
				  	 	if( !empty($image) ): ?>
				  	 		<div class="textimagegrid__item">
					  	 		<div class="textimagegrid__iteminner">
						  	 		<img class="textimagegrid__image" src="<?php echo $image['sizes']['grid']; ?>" alt="" />
										<?php
											if(get_sub_field('four_image_grid_text')) { ?><span class="textimagegrid__imagecaption"><?php the_sub_field('four_image_grid_text'); ?></span><?php } ?>
					  	 		</div>
					  	 	</div>
				  	 <?php endif; ?>
				  <?php
				  endwhile;
				else :
				    // no rows found
				endif; ?>
		</div>
	</div>
</div><!-- .container -->
