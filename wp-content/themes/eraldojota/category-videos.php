<?php get_header(); ?>

<main id="main">

	<section id="services" class="post category">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<hr>
				<h1>VÍDEOS</h1><br>
			</div>

			<div class="row">
				<?php
				$argsV = array(
					'category_name' => 'videos',
					'order' => 'ASC',
					'orderby' => 'title'
				);
				$loop = new WP_Query($argsV);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>
					<div class="col-md-6 videos">
						<?php echo get_the_content(); ?>
					</div>
				<?php } ?>
			</div>

		</div>
	</section>

</main><!-- End #main -->

<?php get_footer(); ?>