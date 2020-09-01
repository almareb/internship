<?php 
	/* 
		template name: gallery
	*/
?>
<?php get_header() ?>

    <section class="cover_c">
    <?php echo do_shortcode('[metaslider id="80"]'); ?>
        <h1>გალერეა</h1>
    </section>

    <section>
        <div class="container bg_gallery">

            <?php 
                for($i=0; $i<3; $i++){ 
            ?>
                <div class="gallery_wrapper marg">
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

            <?php } //end for
            ?>
            
        </div>
    </section>

<?php get_footer() ?>

</body>
</html>