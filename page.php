<?php get_header() ?>

	<section class="cover_c">
		<?php echo do_shortcode('[metaslider id="80"]'); ?>
        <h1>სერვისები</h1>
	</section>
	
	<section class="bg_services">
    <div>

    	<?php $posts = get_posts( array(
			'numberposts' => 3,
			'category'   => 8,
			'suppress_filters' => true, 
			));

			$i=0;
			foreach( $posts as $post ){setup_postdata($post);
				if ($i%2!==0){ ?>

					<div class="ser_art_wrapper">
						<?php the_post_thumbnail();?>
						<div class="art_text_wrapper">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							<a href="<?php the_permalink(); ?>" class="button_wrapper_art">
								<button type="button">იხილეთ მეტი</button>
							</a>
						</div>
					</div>
					
				<?php } //endif
				else { ?>
					<div class="ser_art_wrapper">
						<div class="art_text_wrapper">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							<a href="<?php the_permalink(); ?>" class="button_wrapper_art">
								<button type="button">იხილეთ მეტი</button>
							</a>
						</div>
						<?php the_post_thumbnail(); ?>
					</div>
				<?php } //endelse
				
				$i++;

			} //end foreach
               wp_reset_postdata(); 
            ?>
		</div>

		<aside class="sidebar_wrapper">
            <?php get_sidebar() ?>
		</aside>
    </section>

    <?php get_footer('services') ?>

</body>
</html>