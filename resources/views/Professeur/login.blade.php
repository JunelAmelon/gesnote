<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gesnote, Managment Notes tools</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="/">Gesnote<span>.</span></a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto active" href="/">Home</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      <a href="/login" class="get-started-btn scrollto">login</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Bienvenue sur votre espace de gestion chere enseignant</h1>
          <h2>Veuillez bien vous identifier pour continuer</h2>
          <div style="display: flex; flex-direction:row;">
            <a href="/login/teacher" class="btn-get-started scrollto" style="margin-right:4%;">Connectez-vous</a>
            <a href="/login" class="btn-get-started scrollto" style="background-color:darkblue; color:white; border: 1px solid darkblue;">Compte Etudiant !</a>
          </div> 
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    <div style="text-align:center; margin-top:6%;">
  @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
               <span class="alert alert-danger">{{ $error }}</span
            @endforeach
        </ul>
    </div>
@endif
</div>

  <!-- ======= Form Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">



        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 offset-lg-3 ">
            <form action="{{route('signTreat')}}" method="post" role="" class="login-form">
                @csrf
                 <div class="section-title">
 
          <h2>Login</h2>
          <p> Authentifier vous pour  acceder a votre espace Enseignant</p>
        </div>
              <div class="form-group">
                <input type="text" name="id_user" class="form-control" id="id_etu" placeholder="Entrez votre identifiant" required>
               </div>
              <div class="form-group">
               <input type="password" class="form-control" name="password" id="email" placeholder="Entrez votre mot de passe" required>
               </div>
           <div class="text-left"> <button  type="submit">Connecter</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
<!--Vendor files-->
  <!-- <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script> -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
 

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
