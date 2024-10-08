
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container-lg d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="/user">Hamro Dream Auto</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo me-auto"><img src="{{ asset('frontend/assets/img/logo1.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{route('user.index')}}">Home</a></li>
          <li><a href="{{route('user.products')}}">Parts</a></li>
          <li ><a href="{{route('user.aboutus')}}">About</a></li>
          <li><a href="{{route('user.contactus')}}">Contact Us</a></li>
          
          <li class="dropdown"><a href="{{route('user.profile.index')}}"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('user.profile.index')}}">
               <span>Profile</span></a></li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
              <li><a href="" onclick="event.preventDefault();
                this.closest('form').submit();">Logout</a></li>
              </form>
            </ul>
          </li>

          {{-- <li><a class="getstarted " href="/appointment">Book Appointment</a></li> --}}

        </ul>

        {{-- Mobile Toggle --}}
        <i class="bi bi-list mobile-nav-toggle"></i>


    <livewire:cart-content />
    
  </header><!-- End Header -->


 