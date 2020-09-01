<?php 
	/* 
		template name: about us
	*/
?>

<?php get_header() ?>

	<section class="cover_c">
		<?php echo do_shortcode('[metaslider id="80"]'); ?>
        <h1>ჩვენ შესახებ</h1>
    </section>

	<section>
		<div class="about_bg">

			<?php $posts = get_posts( array(
				'numberposts' => 3,
				'category'   => 7,
				'suppress_filters' => true, 
				));

					$i=0;
				foreach( $posts as $post ){setup_postdata($post);
					
					if ($i%2!==0){ 
			?>
						<article class="article_wrapper">
							<?php the_post_thumbnail();?>
							<div class="par_wrapper">
								<?php the_content(); ?>
							</div>
						</article>
						
			<?php } //endif

					else { 
			?>
						<article class="article_wrapper">
							<div class="par_wrapper">
							<p><?php the_content(); ?></p>
							</div>
							<?php the_post_thumbnail();?>
						</article>

			<?php } //endelse

				$i++;

				} //end foreach

				wp_reset_postdata(); 
			?>
			
		</div>
	</section>

<?php get_footer() ?>

</body>
</html>