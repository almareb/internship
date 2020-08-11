    
    <?php get_header() ?>

	<section class="bg_img">
		<!-- slider -->
		<?php echo do_shortcode('[metaslider id="61"]'); ?>

			<div class="block_wrapper">
				<h1>სათაური</h1>
				<p>მოკლე აღწერა თუ იქნება ფოტოზე შეიძლება ასე დაიწეროს, ამ ნაწილში</p>
				<a href="#">
					<button type="button">იხილეთ მეტი</button>
				</a>
			</div>
	</section>
	
	<!-- section 2- about us -->
	<section>
		<div class="bg_sec2">
			<?php $posts = get_posts( array(
				'numberposts' => 1,
				'category'   => 7,
				'suppress_filters' => true, 
				));
			
				foreach( $posts as $post ){setup_postdata($post); 
			?>
					
				<div class="about_wrapper">
					<h2>ჩვენ შესახებ</h2>
					<p><?php the_excerpt() ?></p>
					<a href="<?php echo get_page_link(7); ?>" class="button_wrapper_about">
						<button type="button">იხილეთ მეტი</button>
					</a>
				</div>
				<div class="img_wrapper_about">
					<?php the_post_thumbnail(); ?>
				</div>
				
			<?php } //end foreach
			wp_reset_postdata(); 
			?>
			
		</div>
	</section>

	<!-- section 3- services -->
	<section>
		<div class="bg_sec3">

			<?php $posts = get_posts( array(
				'numberposts' => 1,
				'category'   => 8,
				'suppress_filters' => true, 
				));
			
				foreach( $posts as $post ){setup_postdata($post); 
			?>
					
					<div class="img_wrapper_services">
						<h2>სერვისები</h2>
							<?php the_post_thumbnail(); ?>
					</div>
					<div class="text_wrapper_services">
						<h3><?php the_title() ?></h3>
						<p><?php the_excerpt() ?></p>
						<a href="<?php echo get_page_link(9); ?>" class="button_wrapper_services">
							<button type="button">იხილეთ მეტი</button>
						</a>
					</div>
				
			<?php } //end foreach
			wp_reset_postdata(); 
			?>

		</div>
	</section>
	
	<!-- section 3- gallery -->
	<section>
		<div class="bg_sec4 container">
			<h2>გალერეა</h2>
			<div class="gallery_wrapper">

				<?php $posts = get_posts( array(
					'numberposts' => 3,
					'post_type'   => 'photo',
					'suppress_filters' => true, 
					));
			
					foreach( $posts as $post ){setup_postdata($post); 
				?>
					<?php the_post_thumbnail(); ?>

				<?php } //end foreach
				wp_reset_postdata(); 
				?>
				
			</div>
			
			<a class="button_wrapper_gallery" href="<?php echo get_page_link(11); ?>">
				<button type="button">იხილეთ მეტი</button>
			</a>
			
		</div>
	</section>

    <?php get_footer() ?>

</body>
</html>