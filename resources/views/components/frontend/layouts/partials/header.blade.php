<header id="header" class="fixed-top position-relative">

  <div class="container d-flex align-items-center">

    <link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/img/logo.png')}}">

    <nav id="navbar" class="navbar sticky-top order-last order-lg-0" >

      <ul>
        <a href="{{route('homepage')}}" class="logo me-auto"><img src="frontend/assets/img/logo.png" alt=""></a>

        <li><a class="nav-link scrollto "  href="{{route('homepage')}}">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
        <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

    </nav>

    <a href="#appointment" class="appointment-btn scrollto"   ><span class="d-none d-md-inline">Make an</span> Appointment</a>


  
    &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
  
    <!-- <li id="heart-trigger" class="heart heart-trigger"><span class="fa fa-heart"></span></li> -->

    @guest
    <a class="appointment-btn scrollto" type="button"    href="{{ route ('register') }} ">Register</a>
    
    <a class="appointment-btn scrollto" type="button"    href="{{ route ('login') }} ">Login</a>

    <nav id="navbar" class="navbar sticky-top order-last order-lg-0">


    


        
       
        @else

        <a href="{{route('dashboard')}}" class="appointment-btn scrollto "   aria-expanded="false">
          Dashboard
        </a>
        @endguest

        
      


      &nbsp;&nbsp;&nbsp;
 
    


      <i class="bi bi-list mobile-nav-toggle"></i>

    </nav>



  </div>

</header>