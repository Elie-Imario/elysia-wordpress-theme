<?php 
get_header(); 
?>


    <main>
    <!--
      - #HOME SECTION
    -->
    <div class="container">
        <section class="home" id="home">

            <div class="deco-shape shape-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape-1.png" alt="art shape" width="70">
            </div>
            <div class="deco-shape shape-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape-2.png" alt="art shape" width="55">
            </div>
            <div class="deco-shape shape-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape-3.png" alt="art shape" width="120">
            </div>
            <div class="deco-shape shape-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape-4.png" alt="art shape" width="30">
            </div>

            <div class="home-left">

            <p class="section-subtitle">Bienvenu dans notre site Web</p>

            <h1 class="main-heading"> 
                Porter une attention particulière 
                <span class="underline-img">à l’éducation émotionnelle <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-line.png" alt="line"></span>
            </h1>

            <p class="section-text">
                Elysia est une école alternative où chaque enfant bénéficie d'un suivi personnalisé avec un ratio de 1 éducateur pour dix enfants.
            </p>

            <div class="home-btn-group">
                <button class="btn-home btn-contact">
                <p class="btn-text">Contactez nous</p>   
                </button>
            </div>

            </div>

            <div class="home-right">

            <div class="img-box">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-img-bg.png" alt="colorful background shape" class="background-shape">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-img.png" alt="banner image" class="banner-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim">

            </div>

            </div>

        </section>
    </div>

    <div class="container">
        <section class="course" id="course">
            <div class="d-lg-block d-md-none d-sm-none d-none">
              <p class="section-subtitle">Evénements</p>
              <h2 class="section-title">Dernières nouvelles</h2>      
              <button class="btn btn-primary">
                  <p class="btn-text">Voir plus</p>
              </button>
            </div>
            <div class="d-lg-none d-md-block d-sm-block d-none">
              <div class="row">
                  <div class="col-6">
                  <p class="section-subtitle">Evénements</p>
                  <h2 class="section-title">Dernières nouvelles</h2> 
                  </div>
                  <div class="col-6">
                  <button class="btn btn-primary btn-voir">
                      <p class="btn-text">Voir plus</p>
                  </button>
                  </div>
              </div>  
            </div>
            <div class="d-lg-none d-md-none d-sm-none d-block">
              <div class="row">
                  <div class="col-6">
                  <p class="section-subtitle">Evénements</p>
                  </div>
                  <div class="col-6">
                  <button class="btn btn-primary btn-voir">
                      <p class="btn-text">Voir plus</p>
                  </button>
                  </div>
              </div>     
            </div>
        </section>
    </div> 

    <div class="course-grid">
      <!-- POST -->
      <?php if( have_posts() ) { while( have_posts() ) { the_post(); ?>
        <div class="course-card">
            <div class="course-banner">
                <img src="<?php the_post_thumbnail_url()?>" alt="course banner">
            </div>
            <div class="blog-content">
                <h3 class="blog-title">
                <a href="#"><?php the_title(); ?>.</a>
                </h3>
                <div class="wrapper">
                    <div class="blog-publish-date">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.png" alt="calendar icon">
                        <a href="#"><?php the_time( get_option('date_format') )?></a>
                    </div>
                    <div class="blog-comment">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comment.png" alt="comment icon">
                        <a href="#"><?php comments_number('0', '1', '%') ?> Comments</a>
                    </div>
                </div>
            </div>
        </div>
      <?php } } ?>
      <!---->
    </div>
    <!--
    - #ABOUT SECTION
    -->
    <div class="container">
        <section class="about" id="about">
            <div class="about-left">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="about person" class="about-img">
                </div>
            </div>
            <div class="about-right">
                <p class="section-subtitle">About</p>
                <br/>
                <h2 class="section-title">Découvrez notre mission</h2>
                <br/> 
                <br/>
                <ul>
                    <li class="features-item">
                        <div class="item-icon-box blue">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-icon-1.png" alt="feature icon">
                        </div>
                        <div class="wrapper">
                            <p class="item-text">Nous accueillons les enfants dès le début de leur scolarité dans nos sections PS/ MS et GS.</p>
                        </div>
                    </li>
                    <li class="features-item">
                        <div class="item-icon-box pink">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-icon-2.png" alt="feature icon">
                        </div>
                        <div class="wrapper">
                            <p class="item-text">Ensuite, ils peuvent intégrer le primaire dans des classes restreintes multi-niveaux allant de la 11ème à la 7ème en suivant le cursus académique national.</p>
                        </div>
                    </li>
                    <li class="features-item">
                        <div class="item-icon-box purple">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-icon-3.png" alt="feature icon">
                        </div>
                        <div class="wrapper">
                            <p class="item-text">Notre but est de l'exposer et l'initier à des activités extra-scolaires et des ateliers pour ouvrir ses horizons.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!--
    - #FEATURES SECTION
    -->
    <div class="container">
    <!-- LG -->
        <div class="d-lg-block d-md-none d-sm-none d-none"> 
            <section class="features">     
            <div class="features-left">
                <p class="section-subtitle">Map location</p><br/>
                <h1 class="main-heading"> 
                Ateliers de Vacances & Ecole 
                <span class="underline-img">Prescolaire et PRIMAIRE <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-line.png" alt="line"></span>
                </h1>
            </div>
            <div class="features-right">
                <div class="instructor-card">
                <div class="instructor-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map_location.png" class="img-fluid img-map" alt="">
                </div>
                </div>
            </div>
            </section>  
        </div>

        <!-- MD -->
        <div class="d-lg-none d-md-block d-sm-none d-none"> 
            <section class="features">     
            <div class="features-left">
                <p class="section-subtitle">Map location</p><br/>
                <h1 class="main-heading"> 
                Ateliers de Vacances & Ecole 
                <span class="underline-img">Prescolaire et PRIMAIRE <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-line.png" alt="line"></span>
                </h1>
            </div>
            <div class="features-right py-5">
                <div class="instructor-card">
                <div class="instructor-img-box t-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map_location.png" class="img-fluid img-map-md" alt="">
                </div>
                </div>
            </div>
            </section>  
        </div>
        <!-- SM -->
        <div class="d-lg-none d-md-none d-sm-block d-none"> 
            <section class="features">     
            <div class="features-left">
                <p class="section-subtitle">Map location</p><br/>
                <h1 class="main-heading"> 
                Ateliers de Vacances & Ecole 
                <span class="underline-img">Prescolaire et PRIMAIRE <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-line.png" alt="line"></span>
                </h1>
            </div>
            <div class="features-right py-5">
                <div class="instructor-card">
                <div class="instructor-img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map_location.png" class="img-fluid img-map-sm mt-5" alt="">
                </div>
                </div>
            </div>
            </section>  
        </div>
        <!-- XS -->
        <div class="d-lg-none d-md-none d-sm-none d-block">
            <div class="row features">
                <div class="col-12 px-5 text-center">
                    <div class="map">
                        <div class="features-l">
                            <p class="section-subtitle">Map location</p><br/>
                            <h1 class="main-heading"> 
                            Ateliers de Vacances & Ecole 
                            <span class="underline-img">Prescolaire et PRIMAIRE <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-line.png" class="img-fluid " alt="line"></span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="c-map mx-auto py-5">
                        <div class="features-r">
                            <div class="instructor-card px-3">
                                <div class="instructor-img-box ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map_location.png" class="img-fluid img-map-xs" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    </main>

<?php get_footer(); ?>
