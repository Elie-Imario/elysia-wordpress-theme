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

    
    <div class="container">
      <main>
        <!--
          - #ABOUT SECTION
        -->

        <section class="about" id="about">

          <div class="about-left">

            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-software-app.png" alt="about person" class="about-img">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-aliment-icon-3.png" alt="" class="icon-2 smooth-zigzag-anim-3" width="195">
            </div>

          </div>

          <div class="about-right">

            <p class="section-subtitle">Processus d’inscription</p>
            <br/>
            <p class="section-text">
              Notre méthode personnalisée nous permet d’intégrer les étudiants en cours d’année scolaire
              Prendre un rendez-vous pour rencontrer l’équipe pédagogique.
            </p>
            <br/><br/>
            <ul class="about-ul">

              <li>
                <ion-icon name="checkmark-circle"></ion-icon>
                <p>01 Extrait d’acte de naissance original moins de 3 mois.</p>
              </li>

              <li>
                <ion-icon name="checkmark-circle"></ion-icon>
                <p>01 Certificat de résidence de l’enfant moins de 3 mois.</p>
              </li>

              <li>
                <ion-icon name="checkmark-circle"></ion-icon>
                <p>01 Certificat de résidence des parents moins de 3 mois.</p>
              </li>

              <li>
                <ion-icon name="checkmark-circle"></ion-icon>
                <p>Fiche d’admission (Si l’enfant a déjà fait une visite médicale).</p>
              </li>

            </ul>

            <button class="btn btn-primary">
              <p class="btn-text">Explore More</p>
            </button>

          </div>

        </section>

      </main>
    </div>

<?php get_footer(); ?>
