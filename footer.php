<footer>
		<div class="footer_bg">
			<div class="container footer_wrapper">
				<div class="contact_wrapper">
					<h2>კონტაქტი</h2>
					<div class="info_wrapper">
						<p>
						<?php echo do_shortcode('[location]'); ?>
						</p>
						<p>
							<?php echo do_shortcode('[number]'); ?>
						</p>
						<p>
							<?php echo do_shortcode('[mail]'); ?>
						</p>
					</div>
					
					<a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f social"></i>
                    </a>
					
					<form class="forms_wrapper">
						<label for="name"></label>
						<input type="text" name="name" id="name" placeholder="სახელი">

						<label for="email"></label>
						<input type="email" name="email" id="email" placeholder="E-mail">

						<label for="text"></label>
						<textarea name="text" id="text" placeholder="ტექსტი"></textarea>
					</form>
					<div class="button_wrapper_footer">
						<button type="submit">გაგზავნა</button>
					</div>
				</div>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.6967300650404!2d44.77732021493797!3d41.70548218417865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cce3a01fef7%3A0x2a75ae2128072d6!2s30%20Vasil%20Petriashvili%20Street%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1590943205969!5m2!1sen!2sge" width="40%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</footer>

	<!-- Javascript
	========================================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    
    <?php wp_footer(); ?>