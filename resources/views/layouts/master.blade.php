<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ __('BMT') }} - {{ __('Home') }}</title>

  <!-- Favicons -->
  <link href="{{asset('/')}}assets/img/favicon.png" rel="icon">
  <link href="{{asset('/')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/aos/aos.css" rel="stylesheet">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/datatables.yajrabox.com/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/datatables.yajrabox.com/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/datatables.yajrabox.com/js/datatables.bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.6/sweetalert2.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.6/sweetalert2.css">

  <!-- PPT  -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('css/pptx2html.css')}}"> -->

  <!-- <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script> -->
  <script type="text/javascript" src="{{ asset('js/FileSaver.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/lz-string.min.js') }}"></script>

  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/pptx2html.js') }}"></script>

  <link rel="stylesheet" href="{{ asset('css/nv.d3.min.css') }}">
  <script type="text/javascript" src="{{ asset('js/chart/d3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart/nv.d3.min.js') }}"></script>
  <!-- <script type="text/javascript" src="js/jszip.min.js"></script> -->
  <!-- <script type="text/javascript" src="js/colz.class.min.js"></script> -->
  <script type="text/javascript" src="{{ asset('js/highlight.min.js') }}"></script>
  <!-- <script type="text/javascript" src="js/tXml.js"></script> -->
  <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/worker.js') }}"></script>

  <script type="text/javascript" src="{{ asset('js/reveal.js') }}"></script>

  <!-- <link rel="stylesheet" href="{{ asset('css/reveal.css')}}"> -->
  <link rel="stylesheet" href="{{ asset('css/theme/pptx.css')}}" id="theme"> 

    <!-- Template Main CSS File -->
  <link href="{{asset('/')}}assets/css/main.css" rel="stylesheet">

  <style>
    .sel_location {
      position:absolute;
      right:1rem;
      margin-top: 1rem;
    }
    .ml-2 {
      margin-left: 1.5rem;
    }
    .page-header {
      margin-top: 0;
      margin-bottom: 0;
    }

    table { 
      width: 100%; 
      border-collapse: collapse; 
    }
    /* Zebra striping */
    tr:nth-of-type(odd) { 
      background: #eee; 
    }
    th { 
      background: #333; 
      color: white; 
      font-weight: bold; 
    }
    td, th { 
      padding: 6px; 
      border: 1px solid #ccc; 
      text-align: left; 
    }

    @media 
    only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px)  {

      .responsive-table-input-matrix {
        display: block;
        position: relative;
        width: 100%;

        &:after {
          clear: both;
          content: '';
          display: block;
          font-size: 0;
          height: 0;
          visibility: hidden;
        }

        tbody {
          display: block;
          overflow-x: auto;
          position: relative;
          white-space: nowrap;
          width: auto;


          tr {
            display: inline-block;
            vertical-align: top;

            td {
              display: block;
              text-align: center;

              &:first-child {
                text-align: left;
              }
            }
          }
        }

        thead {
          display: block;
          float: left;
          margin-right: 10px;

          &:after {
            clear: both;
            content: "";
            display: block;
            font-size: 0;
            height: 0;
            visibility: hidden;
          }

          th:first-of-type {
            height: 1.4em;
          }

          th {
            display: block;
            text-align: right;

            &:first-child {
              text-align: right;
            }
          }
        }
      }
    }    

    .img-thumbs {
      background: #eee;
      border: 1px solid #ccc;
      border-radius: 0.25rem;
      margin: 1.5rem 0;
      padding: 0.75rem;
    }
    .img-thumbs-hidden {
      display: none;
    }

    .wrapper-thumb {
      position: relative;
      display:inline-block;
      margin: 1rem 0;
      justify-content: space-around;
    }

    .img-preview-thumb {
      background: #fff;
      border: 1px solid none;
      border-radius: 0.25rem;
      box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
      margin-right: 1rem;
      max-width: 140px;
      padding: 0.25rem;
    }

    .remove-btn{
      position:absolute;
      display:flex;
      justify-content:center;
      align-items:center;
      font-size:.7rem;
      top:-5px;
      right:10px;
      width:20px;
      height:20px;
      background:white;
      border-radius:10px;
      font-weight:bold;
      cursor:pointer;
    }

    .remove-btn:hover{
      box-shadow: 0px 0px 3px grey;
      transition:all .3s ease-in-out;
    }

    .div_border {
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .bottom_border {
      border-bottom: 1px solid #ccc;
    }

    .text_center {
      text-align:center;
    }

    .top_bottom_border {
      border-top: 1px solid;
      border-bottom: 1px solid;
    }

  </style>

</head>
<body>
  @include('layouts.includes.navbar')
  @yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="{{route('aspect.home')}}" class="logo d-flex align-items-center">
            <img src="{{asset('/')}}assets/img/TRANSPORT.png" alt="" style="max-height:75px !important;">
            <span>Blue Mile</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{route('aspect.home')}}">Home</a></li>
            <li><a href="{{route('aspect.aboutus')}}">About us</a></li>
            <li><a href="{{route('aspect.services')}}">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Hire candidates</a></li>
            <li><a href="#">Show schedule</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by Drew
      </div>
    </div>

  </footer><!-- End Footer -->
</body>



<!-- Vendor JS Files -->
<script src="{{asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{asset('/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('/')}}assets/vendor/aos/aos.js"></script>
<script src="{{asset('/')}}assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('/')}}assets/js/main.js"></script>

</html>

