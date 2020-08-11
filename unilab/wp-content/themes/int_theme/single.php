<?php get_header() ?>

    <section class="cover_c">
		<?php echo do_shortcode('[metaslider id="80"]'); ?>
        <h1>სერვისები</h1>
	</section>
    <?php the_post(); ?>
    <section class="bg_services">
		
		<div>

			<div class="single_art_wrapper">
				<div class="single_cont_wrapper">
					<h2><?php the_title(); ?></h2>
                    
                    <?php the_post_thumbnail(); ?>
                </div>
                <p>კრასნოდარიდან კვინიხზე დრამატურგი გაასწორებს ფონს მომიკლავს ამოდიან ჟესტი ლაჟვარდს დავრჩე აუფეთქდა, თავგადასავლებით ტახტივით. ლაჟვარდს სანადირო ყრილობაზე კრასნოდარიდან</p>
			</div>

			<div>
                <div class="price_wrapper">
                    <ul class="price_list">
                        <li><?php the_field('time1_a'); ?> საათი</li>
                        <li><?php the_field('time2_a'); ?> საათი</li>
                        <li><?php the_field('time3_a'); ?> საათი</li>
                    </ul>
                    <ul class="price_list">
                        <li>ფასი  <?php the_field('price1_a'); ?> ლარი</li>
                        <li>ფასი  <?php the_field('price2_a'); ?> ლარი</li>
                        <li>ფასი  <?php the_field('price3_a'); ?> ლარი</li>
                    </ul>
                </div>

                <div class="price_wrapper">
                    <ul class="price_list">
                        <li><?php the_field('time1_b'); ?> საათი</li>
                        <li><?php the_field('time2_b'); ?> საათი</li>
                        <li><?php the_field('time3_b'); ?> საათი</li>
                    </ul>
                    <ul class="price_list">
                        <li>ფასი <?php the_field('price1_b'); ?> ლარი</li>
                        <li>ფასი <?php the_field('price2_b'); ?> ლარი</li>
                        <li>ფასი <?php the_field('price3_b'); ?> ლარი</li>
                    </ul>
                </div>

            </div>

	

		</div>
		

		<aside class="sidebar_wrapper">
            <?php get_sidebar(); ?>
		</aside>
    </section>
	
    <?php get_footer('services') ?>

</body>
</html>