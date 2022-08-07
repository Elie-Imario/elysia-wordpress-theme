<?php get_header(); ?>
<body>
        <!--
          - #HEADER
        -->
    <header class="header" data-header>
      <div class="container">
        <div class="navbar-brand">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Educator Logo">
        </div>        

        <div class="header-actions">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a href="vie_scolaire.html">Vie Scolaire</a>
            </li>
            <li class="nav-item">
              <a href="inscription.html">Inscription</a>
            </li>
            <li class="nav-item">
              <a href="actualite.html">Actualité</a>
            </li>
            <li class="nav-item">
              <a href="formulaire.html">Formulaire</a>
            </li>
            <li class="nav-item">
              <a href="temoignages.html">Témoignages </a> 
            </li>
          </ul>
        </div>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>
      </div>
    </header>

    
        <!--
        - #EVENT SECTION
         -->
      <div class="container">
        <section class="about" id="about">

          <div class="about-left">
  
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img-bg.png" alt="about bg" class="about-bg">
  
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fille.png" alt="about person" class="about-img">
            </div>
  
          </div>
  
          <div class="event-right">
  
            <p class="section-subtitle">Vie Scolaire</p>
            <br/>
            <p class="section-text">
              L’école offre des activités pour les élèves jusqu’à 16h30, tous les jours de la semaine, sauf le mercredi de 15h30 à 16h30, soit sous forme d’atelier extrascolaire cités ci-dessus, soit un suivi One to One avec un éducateur pour certains élèves qui ont besoin d’un suivi particulier en apprentissage..
            </p>
            <br/>
            <h2 class="section-title">Horaires</h2>
            <br/>
            <div class="event-card-group">
              <div class="event-card">
  
                <div class="content-left">
                  <p class="niveau">Préscolaire</p>
                </div>
  
                <div class="content-right">
                  <div class="schedule">
                    <p class="time">8h à 11h   13h à 15h</p>
                  </div>
  
                  <a href="#" class="event-name">Les enfants peuvent être récupérés à partir de 15h en préscolaire et 15h15 en primaire.</a>
                </div>
  
              </div>
  
              <div class="event-card">
  
                <div class="content-left">
                  <p class="niveau">Primaire</p>
                </div>
  
                <div class="content-right">
                  <div class="schedule">
                    <p class="time">8h à 11h30   13h à 15h15
                    </p>
                  </div>
  
                  <a href="#" class="event-name">Les enfants peuvent être récupérés à partir de 15h en préscolaire et 15h15 en primaire..</a>
                </div>
  
              </div>  
            </div>
          </div>
  
        </section>
      </div>

      <!--
        - #slide
      -->
      
      <section class="course" id="course">
          <p class="section-subtitle">À propos</p>
          
      </section>

<?php get_footer(); ?>
