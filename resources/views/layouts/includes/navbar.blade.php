<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('aspect.home')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('/')}}assets/img/TRANSPORT.png" alt="">
        <h1>Blue Mile</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('aspect.home')}}" class="active">Home</a></li>
          <li><a href="{{route('aspect.aboutus')}}">About</a></li>
          <li><a href="{{route('aspect.services')}}">Services</a></li>
          <li><a href="{{route('aspect.pricing')}}">Pricing</a></li>
          @if(Auth::check() == true)
          <li class="dropdown"><a href="#"><span>Candidates</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('hiring.participate')}}">Participate <i class="fas fa-truck"></i></a></li>
              @if(Auth::user()->role->name == "Admin")
              <li><a href="{{route('hiring.hire')}}">Hire <i class="fas fa-address-card"></i></a></li>
              @endif
              <li><a href="{{route('hiring.help')}}">Help <i class="fas fa-question-circle"></i></a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Scheduling</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ url('/datatable') }}">DataTable</a></li>
              <li><a href="{{ url('/pptx') }}">PPT</a></li>
              <!-- <li><a href="">Files <i class="fas fa-question-circle"></i></a></li> -->
            </ul>
          </li>
          @endif
          <li><a href="{{route('aspect.contactus')}}">Contact</a></li>
          <!-- <li><a class="get-a-quote" href="{{route('aspect.getquote')}}">Get a Quote</a></li> -->
          @if(Auth::check() == false)
            <li><a href="{{url('login')}}">{{ __('Login') }}</a></li>
            <li><a href="{{url('register')}}">{{ __('Register') }}</a></li>
          @else
            <li class="dropdown">
              <a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li>
                    @if(Auth::user()->role->name == "Admin")
                        <a href="{{route('admin.home')}}">
                            <i class="fas fa-user"></i>
                            {{ __('Profile') }}
                        </a>
                    @elseif(Auth::user()->role->name == "User")
                        <a href="#">
                            <i class="fas fa-user"></i>
                            {{ __('Profile') }}
                        </a>
                    @else
                        <a href="#">
                            <i class="fas fa-user"></i>
                            {{ __('Profile') }}
                        </a>
                    @endif
                </li>
                <li>
                    <a href="{{url('logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>
                </li>
              </ul>
            </li>
          @endif
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
