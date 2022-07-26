<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Template Mo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>About Us - Globus World</title>

  <?php include 'layouts/head.php'; ?>
</head>

<body>



  <?php include 'layouts/header.php'; ?>

  <section class="heading-page header-text header-bg-01" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>A propos nous</h6>
          <h2>Albehja Société</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="metieres-" id="meetings">
    <section class="section-desinsectisation section-01">
      <div class="container">
        <h1>ABOUT OUR PEST CONTROL COMPANY</h1>
        <p>globus world est une entreprise 100 % London, spécialisée dans la lutte antiparasitaire. Depuis la fondation de notre compagnie, notre équipe s’efforce à répondre aux besoins grandissants des habitants et des entreprises en matière d’extermination et de décontamination. Nous croyons que chaque résidence, commerce et industrie mérite un technicien d’expérience offrant un service personnalisé.<br><br>
          Forte de plus de 30 ans d’expérience dans le domaine, notre équipe a développé des techniques de gestion parasitaire éprouvées.</p>
      </div>
    </section>
    <section class="section-about">
      <div class="container">
        <div class="title-offert">
          <h1>LA GARANTIE OFFERTE PAR NOTRE LUTTE ANTIPARASITAIRE</h1>
        </div>
        <div class="content-offert">
          <div class="row">
            <div class="col">
              <h4>NOTRE PROPOSITION</h4>
              <p>En plus d’offrir des services personnalisés et garantis, nous travaillons selon des méthodes à la fois écologiques et efficaces.</p>
            </div>
            <div class="col">
              <h4>NOTRE MISSION</h4>
              <p>Assurer un environnement propre et sain, tout en respectant<br>votre santé et l’équilibre de l’environnement.</p>
            </div>
          </div>
          <div class="card">
            <div class="col-bottom">
              <div class="title-offert">
                <h4>NOTRE BUT</h4>
              </div>
              <p>Faire de votre chez-vous un endroit agréable, dénué de toute espèce nuisible</p>
              <p style="margin-top: 10px;">Grâce aux interventions de nos techniciens certifiés, nous faisons de chaque visite un passage où l’extermination<br>et la prévention sont effectuées à la perfection.</p>
            </div>
          </div>
        </div>
        <div class="content-contact">
          <p>Pour en savoir plus sur nos tarifs et nos méthodes de lutte antiparasitaire,<br><b>CONTACTEZ-NOUS AU +44 01 0707 1855</b></p>
        </div>
      </div>
    </section>
  </section>

  <?php include 'layouts/footer.php'; ?>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>


</body>

</html>