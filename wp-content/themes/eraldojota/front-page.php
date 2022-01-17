<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(<?php echo SITEPATH; ?>assets/img/hero-bg.jpg)">
  <div class="overlay-itro"></div>
  <div class="hero-content display-table">
    <div class="table-cell">
      <div class="container">
        <!--<p class="display-6 color-d">Hello, world!</p>-->
        <h1 class="hero-title mb-4">Eraldo Jota</h1>
        <p class="hero-subtitle"><span class="typed" data-typed-items="Músico, Compositor, Intérprete, Professor"></span></p>
        <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
      </div>
    </div>
  </div>
</div><!-- End Hero Section -->
<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <?php
              $loop = new WP_Query(array('name' => 'biografia'));
              while ($loop->have_posts()) {
                $loop->the_post();
              ?>
                <div class="col-md-6">
                  <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded b-shadow-a" alt="">
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        <?php echo get_the_title(); ?>
                      </h5>
                    </div>
                    <p class="lead text-justify">
                      <?php echo get_the_content(); ?>
                    </p>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services-mf pt-5 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Mídia
            </h3>
            <hr>
            <h4 class="subtitle-a">Vídeos</h4>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $argsV = array(
          'category_name' => 'videos',
          'posts_per_page' => 2,
          'order' => 'DESC'
        );
        $loop = new WP_Query($argsV);
        while ($loop->have_posts()) {
          $loop->the_post();
        ?>
          <div class="col-md-6 videos">
            <?php echo get_the_content(); ?>
          </div>
        <?php } ?>
        <a class="btn-mais" href="/videos">Veja Mais</a>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <br><br><hr>
            <h4 class="subtitle-a">Músicas</h4>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $argsM = array(
          'category_name' => 'musicas',
          'posts_per_page' => 4,
          'order' => 'DESC'
        );
        $loop = new WP_Query($argsM);
        while ($loop->have_posts()) {
          $loop->the_post();
        ?>
          <div class="col-md-3 musicas">
            <?php echo get_the_content(); ?>
          </div>
        <?php } ?>
        <a class="btn-mais" href="/musicas">Veja Mais</a>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <br><br><hr>
            <h4 class="subtitle-a">Textos</h4>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $argsM = array(
          'category_name' => 'textos',
          'posts_per_page' => 4,
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
        <br>
        <a class="btn-mais" href="/textos">Veja Mais</a>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <hr>
            <h3 class="title-a">
              Galeria de imagens
            </h3>
            <p class="subtitle-a">
              Fotos, Eventos, Apresentações, Outros.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $argsG = array(
          'category_name' => 'galeria',
          'posts_per_page' => 6,
          'order' => 'DESC'
        );
        $loop = new WP_Query($argsG);
        while ($loop->have_posts()) {
          $loop->the_post();
        ?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="<?php the_post_thumbnail_url('full'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-fluid">
                </div>
              </a>
            </div>
          </div>
        <?php } ?>
        <a class="btn-mais" href="/galeria">Veja Mais</a>
      </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(<?php echo SITEPATH; ?>assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Fale comigo
                    </h5>
                  </div>
                  <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>
                <div class="col-md-6">
                  <?php
                  $loop = new WP_Query(array('name' => 'social'));
                  while ($loop->have_posts()) {
                    $loop->the_post();
                    echo get_the_content();
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php get_footer(); ?>