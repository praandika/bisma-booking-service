<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>{{ $title }} | Yamaha Bisma Group</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="asset/img/SibismaIconMerah.png" rel="icon">
  <link href="asset/img/SibismaIconMerah.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="asset/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="asset/lib/animate/animate.min.css" rel="stylesheet">
  <link href="asset/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="asset/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="asset/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
      <!-- BEGIN CSS DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Datepicker -->
  <link rel="stylesheet" href="asset/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Main Stylesheet File -->
  <link href="asset/css/style2.css" rel="stylesheet">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style type="text/css">
    #services .service-content a{
      background-color: transparent;
      color: #3188CB;
      border-color: #3188CB;
      border-radius: 0px;
    }

    #services .service-content a:hover{
      background-color: #3188CB;
      color: #FFFFFF;
      border-radius: 20px;
      box-shadow: 0px 0px 10px #3188CB;
    }

    #services .service-content button{
      background-color: transparent;
      color: #3188CB;
      border-color: #3188CB;
      border-radius: 0px;
    }

    #services .service-content button:hover{
      background-color: #3188CB;
      color: #FFFFFF;
      border-radius: 20px;
      box-shadow: 0px 0px 10px #3188CB;
    }

    #services button{
      background-color: transparent;
      color: #3188CB;
      border-color: #3188CB;
      border-radius: 0px;
    }

    #services button:hover{
      background-color: #3188CB;
      color: #FFFFFF;
      border-radius: 20px;
      box-shadow: 0px 0px 10px #3188CB;
    }

    #services .custom-input input{
        border-radius: 0px;
    }
    
    #services .custom-input input:hover{
        box-shadow: 0px 0px 10px #3188CB;
        border-radius: 20px;
    }
  </style>

  @yield('css')

</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:crm_bismagroup@gmail.com">crm_bismagroup@gmail.com</a>
        <i class="fa fa-phone"></i><a href="tel:+62361486666">(0361) 486666</a>
      </div>
      <div class="social-links float-right">
        <a href="https://id-id.facebook.com/people/Yamaha-Bisma/100010988235344" class="facebook"  target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/yamaha_bisma/?hl=id" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#body" class="scrollto"><img src="asset/img/yamaha/logobisma-header.png" alt="">&nbsp;<img src="asset/img/yamaha/line.png" alt="">&nbsp;<img src="asset/img/yamaha/bismagroup.png" alt=""></a>&nbsp;
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ URL('booking') }}"><i class="fa fa-book"></i> Booking Services</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

@yield('content')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <h4>YAMAHA <strong>BISMA GROUP</strong></h4>
      </div>
      
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        
        &copy; Copyright <strong>Tim CRM Bisma</strong> Supported By <a href="dikaprana.com">Andika Pranayoga</a>
        <br>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="asset/lib/jquery/jquery.min.js"></script>
  <script src="asset/lib/jquery/jquery-migrate.min.js"></script>
  <script src="asset/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/lib/easing/easing.min.js"></script>
  <script src="asset/lib/superfish/hoverIntent.js"></script>
  <script src="asset/lib/superfish/superfish.min.js"></script>
  <script src="asset/lib/wow/wow.min.js"></script>
  <script src="asset/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="asset/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="asset/lib/sticky/sticky.js"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="asset/contactform/contactform.js"></script>
  <!-- Datepicker -->
  <script src="asset/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="asset/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="vendor/sweetalert/sweetalert.all.js"></script>
  @include('sweetalert::alert')
  @yield('script')
</body>
</html>