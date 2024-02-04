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

      <nav id="navbar" class="navbar order-last order-lg-0" >
        <ul>
          <li><a class="nav-link scrollto active" href="/acceuil">Home</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('deconnexion') }}" class="get-started-btn scrollto">Deconnecter</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg'); margin-bottom:0%;">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Créer des cours sur cette interface</h1>
          <h2>Junel boko assogba</h2>
          <a href="#login" class="btn-get-started scrollto">You're login</a>
        </div>
      </div>
    </div>
  <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 0%; margin-bottom: 0%; background-color:white;">
      <div class="container">

        <ol>
          <li><a href="/acceuil" style="color: black;">Create</a></li>
          <li style="color: black;"> courses</li>
        </ol>


      </div>
    </section><!-- End Breadcrumbs -->
  </section>



  <!-- ======= Form Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

 @if (Session::has('error'))
    <div  class="alert alert-danger">Erreur: {{ Session::get('error') }}</div>
    @endif

    @if (Session::has('success'))
    <div class="alert alert-success">Succès: {{ Session::get('success') }}</div>
    @endif



        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-8 offset-lg-2 ">
            <form action="{{route('create-coursesT')}}" method="post" role="" class="login-form">
                @csrf
                 <div class="section-title">

          <h2>Remplissez ce champs</h2>
          <p> Assurez vous que les donnees renseignes sont corrects</p>
        </div>
              <div class="form-group">
                <input type="text" name="nom_cours" class="form-control" id="" placeholder="Entrez le nom du cours" required>
               </div>
              <div class="form-group">
               <input type="number" class="form-control" name="id_professeur" id="" placeholder="Entrez l'identifiant du professeur" required>
               </div>
           <div class="text-left"> <button  type="submit">Créer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

<!-- ======= Footer ======= -->

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
              <strong>Phone:</strong> +29 53843902<br>
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
