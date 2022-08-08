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

    <a class="appointment-btn scrollto" type="button"    href="{{ route ('register') }} ">Register</a>
    

    <nav id="navbar" class="navbar sticky-top order-last order-lg-0">


      <div class="dropdown">


        <button class="appointment-btn scrollto dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          Login
        </button>
       
        

        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><a class="dropdown-item" href="{{ route ('login') }}">Admin</a></li>
          <li><a class="dropdown-item" href="{{ route ('login') }}">Doctor</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="{{ route ('login') }}">Patient</a></li>
        </ul>
      </div>


      &nbsp;&nbsp;&nbsp;
 
    


      <i class="bi bi-list mobile-nav-toggle"></i>

    </nav>



  </div>

</header>