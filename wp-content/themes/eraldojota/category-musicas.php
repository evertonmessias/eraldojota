<?php get_header(); ?>

<main id="main">

  <section id="services" class="post category">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <hr>
        <h1>MÚSICAS</h1><br>
      </div>

      <div class="row">
        <?php
        $argsM = array(
          'category_name' => 'musicas',
          'order' => 'ASC',
          'orderby' => 'title'
        );
        $loop = new WP_Query($argsM);
        while ($loop->have_posts()) {
          $loop->the_post();
        ?>
          <div class="col-md-3 musicas">
            <?php echo get_the_content(); ?>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>

</main><!-- End #main -->

<?php get_footer(); ?>