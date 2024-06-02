<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dream Auto Pvt. Ltd.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Add the CSRF token in your main layout or the head section of the cart view -->
<meta name="csrf-token" content="{{ csrf_token() }}">


@livewireStyles
  
  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/logo1.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/logo1.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- {{asset('')}} --}}
  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  {{-- Toast Cdn  --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- JQuery Table Script -->
  <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
  <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
  <script src="{{asset('datatable/datatables.js')}}"></script>

</head>

<body>

  @include('layouts.navbar_user')

  <!-- Carousel Start -->
  <div id="carouselExampleIndicators" class="carousel slide h-82" data-bs-ride="carousel" >
    {{-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> --}}
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('frontend/assets/img/banner/Banner-1.jpg')}}" class="d-block w-100" alt="Slide 1">
        {{-- <div class="carousel-caption d-none d-md-block">
          <h5>Slide Title 1</h5>
          <p>Slide Description 1</p>
        </div> --}}
      </div>
      <div class="carousel-item">
        <img src="{{asset('frontend/assets/img/banner/Banner-2.jpg')}}" class="d-block w-100" alt="Slide 2">
        {{-- <div class="carousel-caption d-none d-md-block">
          <h5>Slide Title 2</h5>
          <p>Slide Description 2</p>
        </div> --}}
      </div>
      <div class="carousel-item">
        <img src="{{asset('frontend/assets/img/banner/Banner-3.jpg')}}" class="d-block w-100" alt="Slide 3">
        {{-- <div class="carousel-caption d-none d-md-block">
          <h5>Slide Title 3</h5>
          <p>Slide Description 3</p>
        </div> --}}
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel End -->

  <main id="main">
    @yield('home_content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Dream Auto Pvt. Ltd.</h3>
            <p>
              Savapati chowk <br>
              Kawasoti-8 , Nawalparasi<br>
              Nepal <br><br>
              <strong>Phone:</strong> +977-982-1536439<br>
              <strong>Email:</strong> kawasotisuzukiservice@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('user.aboutus')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('user.products')}}">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('user.orders.cart')}}">Cart</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('user.contactus')}}">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Book Appointment</li>
              <li><i class="bx bx-chevron-right"></i>Buy parts</li>
              <li><i class="bx bx-chevron-right"></i>Denting</li>
              <li><i class="bx bx-chevron-right"></i>Painting</li>
              <li><i class="bx bx-chevron-right"></i>On spot service</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>You can connect with our team for more information</p>
            <div class="social-links mt-3">
             
              <a href="https://www.facebook.com/people/%E0%A4%B9%E0%A4%BE%E0%A4%AE%E0%A5%8D%E0%A4%B0%E0%A5%8B-%E0%A4%A1%E0%A5%8D%E0%A4%B0%E0%A4%BF%E0%A4%AE-%E0%A4%85%E0%A4%9F%E0%A5%8B-%E0%A4%95%E0%A4%BE%E0%A4%B5%E0%A4%BE%E0%A4%B8%E0%A5%8B%E0%A4%A4%E0%A5%80/100024872172559/" class="facebook" target="_blank" ><i class="bx bxl-facebook"></i></a>
              
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Dream Auto Pvt. Ltd.</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Maintained by <a href="https://pramodchhetri.com.np/">Pramod Chhetri</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  <script>
    // JavaScript to toggle notification sidebar visibility
    const notificationToggle = document.querySelector('.notification-container');
            const notificationSidebar = document.getElementById('notificationSidebar');
            const notificationSidebarClose = document.getElementById('notificationSidebarClose');

            notificationSidebarClose.addEventListener('click', () => {
                notificationSidebar.classList.toggle('hidden');
            });
    
            notificationToggle.addEventListener('click', () => {
                notificationSidebar.classList.toggle('hidden');
            });
    
  </script>

  @include('layouts.usertoastr')

  @livewireScripts
</body>

</html>