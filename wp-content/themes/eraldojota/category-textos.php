<?php get_header(); ?>

<main id="main">

	<section id="services" class="post category">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<hr>
				<h1>TEXTOS</h1><br>
			</div>
			<br>
			<div class="row">
				<?php
				$argsM = array(
					'category_name' => 'textos',
					'posts_per_page' => 100,
					'order' => 'DESC'
				);
				$loop = new WP_Query($argsM);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>
					<div class="col-md-3 textos">
						<a href="<?php echo get_the_permalink(); ?>">
							<i class="bx bx-file"></i><br>
							<?php echo get_the_title(); ?>
						</a>
					</div>
				<?php } ?>
			</div>

		</div>
	</section>

</main><!-- End #main -->

<?php get_footer(); ?>