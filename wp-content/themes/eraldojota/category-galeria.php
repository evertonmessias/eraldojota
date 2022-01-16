<?php get_header(); ?>

<main id="main">

	<section class="post category">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<hr>
				<h1>GALERIA</h1><br>
			</div>

			<div class="row">

				<?php
				$args = array(
					'category_name' => 'galeria',
					'order' => 'DESC'
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>
					<div class="col-lg-4 imagem" data-aos="fade-up" data-aos-delay="100">
						<a href="<?php the_permalink() ?>">
							<img src="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
										else echo SITEPATH . "assets/img/semimagem.png"; ?>" class="img-fluid" title="<?php the_title() ?>">
						</a>
					</div>
				<?php }	 ?>

			</div>

		</div>
	</section>

</main><!-- End #main -->

<?php get_footer(); ?>