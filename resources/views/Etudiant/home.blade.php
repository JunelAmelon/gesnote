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
      <h1 class="logo me-auto"><a href="#home">Gesnote<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('deconnexion') }}" class="get-started-btn scrollto">Deconnecter</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Bienvenue sur votre espace etudiant</h1>
          <h2> @if (Session::has('prenom')){{ Session::get('prenom') }} @endif</h2>
          <a href="/login/admin" class="btn-get-started scrollto">You're login</a>
        </div>
      </div>
    </div>

  </section>



      <div class="details">
      <div class="recent_project">
        <div class="card_header">
          <h2>Votre bulletin</h2>
        </div>
         @if(count($notes) > 0)
        <table>
          <thead>

            <tr>
              <td>Matières</td>
              <td>note 1</td>
              <td>note 2</td>
              <td>note 3</td>
              <td>moyenne</td>
            </tr>
          </thead>
          <tbody>
          @foreach($notes as $note)
                    <tr>
                        <td>{{ $note->cours->nom_cours }}</td>

                        <td> {{ $note->note1 }}</td>
                        <td> {{ $note->note2 }}</td>
                        <td> {{ $note->note3 }}</td>
                        <td>{{ $note->cours->moyenne }}</td>
                    </tr>
                @endforeach

          </tbody>
        </table>
          @else
        <p>Aucune note disponible pour le moment.</p>
    @endif
      </div>
      <div class="recent_customers" style="margin-bottom: 0%;">
        <div class="card_header" style="text-align: center;">


           <div class="info_img" >
                       <img src="{{asset('assets/img/hero-bg.jpg')}}"  alt="etudiant">
            </div>
        </div>
       <div style="display:flex; flex-direction: rows; padding-top:0%; height:7vh;">
        <button class="btn btn-success">Prenom: @if (Session::has('prenom')) {{ Session::get('prenom') }} @endif</button>

         <button class="btn btn-primary " style="margin-left: 1%;">Classe: @if (Session::has('classe')) {{ Session::get('classe') }} @endif</button>
         <button class="btn btn-danger" style="margin-left: 1%;"><a href="{{ route('deconnexion') }}" style="color: white;">Log out</a></button>


       </div>

      </div>
    </div>
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
