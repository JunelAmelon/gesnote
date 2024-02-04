<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
     <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>

 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="/acceuil">Gesnote<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/acceuil">Home</a></li>
        </ul>
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">liste etudiant</a></li>
        </ul>
        
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">liste prof</a></li>
        </ul>
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">supprimer acteur</a></li>
        </ul>
          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('deconnexion') }}" class="get-started-btn scrollto">Deconnecter</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row"> 
        <div class="col-xl-6">
          <h1>Bienvenue sur votre espace d'administration admin
          <a href="#login" class="btn-get-started scrollto">You're login</a>
        </div>
      </div>
    </div>

  </section>


       <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" href="/create-etudiant">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Créer un etudiant</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link"   href="/create-courses">
              <i class="bi-book-half"></i>
              <h4 class="d-none d-lg-block">Créer un cours</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link"   href="/create-teacher">
              <i class="bi-person-workspace"></i>
              <h4 class="d-none d-lg-block" >Créer un professeur</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Beneficer d'une interface agreable pour la gestion de cette application.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Contactez nous pour toutes questions </li>
                  <li><i class="ri-check-double-line"></i>  Lisez correcetement la documentation pour une meilleur gestion</li>
                  <li><i class="ri-check-double-line"></i> Bon travail !!!.</li>
                </ul>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/contact-header.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>



      </div>
    </section><!-- End Tabs Section -->

<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Gesnote<span>.</span></h3>
            <p>
              Benin<br>
              Abomey-Calavi2<br>
              <strong>Phone:</strong> +229 53843902<br>
              <strong>Email:</strong> junel@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>

            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Gesnote</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
               Designed by <a href="">JunelDev</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">

        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!--Vendor files-->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
