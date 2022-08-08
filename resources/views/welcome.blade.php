<x-frontend.layouts.master>
  <div class="mt-5">

  </div>
  @if(session('message'))
  <p class="alert alert-success">{{ session('message') }}</p>
  @endif
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('frontend/assets/img/slide/slide-1.jpg')}})">
          <div class="container">
            <h2>Welcome to <span>Sheba Med</span></h2>
            <p></p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/slide/slide-2.jpg')}})">
          <div class="container">
            <h2>A well equipped cutting edge</h2>
            <p> Most advanced diagnostic center is always with you while our technology identifies the disease sharply</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/slide/slide-3.jpg')}})">
          <div class="container">
            <h2>High quality, Appropriate and Accessible Medical Care</h2>
            <p> we aim to deliver for all of our patients</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <main id="main">



    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box col bg-warning" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-phone"></i></div>
              <h4 class="title text-black"><a href="#appoinment">Call For Appointment</a></h4>
              <p class="description"></p>
            </div>

          </div>


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box col bg-warning" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-user"></i></div>
              <h4 class="title"><a href="{{route('doctors.find')}}">Find Doctor</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box col bg-warning" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa fa-money-bill"></i></div>
              <h4 class="title"><a href="{{route('pricelist')}}">Test and Service Charges</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box col bg-warning" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class=" fas fa-solid fa-briefcase-medical"></i></div>
              <h4 class="title"><a href="">Health Package</a></h4>
              <p class="description"></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <p>We provide online based appointments system for appointments booking. It is very easy and it will save your time.</p>
          <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Sheba Med Diagnostic Centre Ltd. is an advanced Centre providing the diagnostic imaging services in an elevated ambience, completed by service and report efficiency.
            Our Pathology division offers a comprehensive range of laboratory tests for diagnosis, management and prevention of a wide variety of diseases.
          </p>
        </div>

      </div>
    </section><!-- End About Us Section -->

   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{count($doctors)}}" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong> of our diagnostic center is always ready to serve you</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{count($departments)}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong> we have for you for all kind of service</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{count($test_department)}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Research Lab</strong> for patholody and imaging</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> we got for our outstanding and best services</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>We are committed to provide affordable services, without any compromise on the quality of service – so that you are able to remain happy</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Pathology</a></h4>
            <p class="description">Biochemistry, Immunology, Serology, Microbiology, Clinical Pathology, Histopathology, Molecular Laboratory</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Pharmacy</a></h4>
            <p class="description">We provide all kinds of life saving medicine, which are available in all branches of Popular Diagnostics Ltd. Our aim is to provide good medicine and best service quality to the patients.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Specialist Consultant</a></h4>
            <p class="description">Our expart & speciality consultant is always ready for all kind of patients</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Imaging</a></h4>
            <p class="description">Philips Inginia 3.0Tesla Digital MRI, Philips Inginia 3.0Tesla Digital MRI, GE Light Speed 500 slice VCT (CT Scanner), SIEMENS Lithotripsy (ESWL)</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Indoor Services</a></h4>
            <p class="description">We also provide indoor sevice with most care and concern for patients</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Health Package</a></h4>
            <p class="description">Our Heath packages provide different kind of health check-up at a resanable cost and we also provide different kind of offer for you</p>
          </div>
        </div>

      </div>
    </section>
    
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Our online appointment book system provide very easy way to get your appointment from your home.Our aim to reduce your suffering. Get your appointments now! </p>
        </div>

        <form action="{{route('ap.store')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                @foreach($departments as $department)
                <option>{{$department->name}}</option>

                @endforeach
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option>Select Doctor</option>
                @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->first_name .' '.$doctor->last_name}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="text-center"><button class="btn btn-info mt-5" type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section>
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departments</h2>
          <p>We of varity of departments which will cover all kind of patients treatments.All of our departments are always maintaied by our highly professionals</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Cardiology</h4>
                  <p>Cardiology is a medical specialty and a branch of internal medicine concerned with disorders of the heart</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Neurology</h4>
                  <p>Neurology is the branch of medicine concerned with the study and treatment of disorders of the nervous system.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Hepatology</h4>
                  <p>Hepatology is an area of medicine that focuses on diseases of the liver as well as related conditions</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Pediatrics</h4>
                  <p>Pediatrics is the branch of medicine</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiology</h3>
                <p class="fst-italic"> It deals with the diagnosis and treatment of such conditions as congenital heart defects, coronary artery disease, electrophysiology, heart failure and valvular heart disease.</p>
                <img src="{{asset('frontend/assets/img/departments-1.jpg')}}" alt="" class="img-fluid">
                <p>Cardiology is a branch of medicine that deals with disorders of the heart and the cardiovascular system. The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Neurology</h3>
                <p class="fst-italic">The nervous system is a complex, sophisticated system that regulates and coordinates body activities. It has two major divisions: Central nervous system: the brain and spinal cord.</p>
                <img src="{{asset('frontend/assets/img/departments-2.jpg')}}" alt="" class="img-fluid">
                <p>Neurology is a branch of medicine dealing with disorders of the nervous system. Neurology deals with the diagnosis and treatment of all categories of conditions and disease involving the central and peripheral nervous systems, including their coverings, blood vessels, and all effector tissue, such as muscle.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Hepatology</h3>
                <p class="fst-italic">A hepatologist is a specialized doctor involved in the diagnosis and treatment of hepatic diseases, which include issues that affect your: liver.</p>
                <img src="{{asset('frontend/assets/img/departments-3.jpg')}}" alt="" class="img-fluid">
                <p>Hepatology is the branch of medicine that incorporates the study of liver, gallbladder, biliary tree, and pancreas as well as management of their disorders.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="fst-italic">Pediatrics is the branch of medicine that involves the medical care of infants, children, and adolescents.</p>
                <img src="{{asset('frontend/assets/img/departments-4.jpg')}}" alt="" class="img-fluid">
                <p>Pediatrics (also spelled paediatrics or pædiatrics) is the branch of medicine that involves the medical care of infants, children, and adolescents. The American Academy of Pediatrics recommends people seek pediatric care through the age of 21</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What ?! People think about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  A complete, advanced and friendly diagnstic and medical service provider in Bangladesh.
                  Their qyalified workforce and quality equipment give best result for any treatment like an international service.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Mr. Hamidul Haque</h3>
                <h4>LearnFacts HS </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sheba Med Diagnostic Center provides best diagnostic and medical services.They have most advanced medical equipment to diagnosis any type of diseases.I am so satisfied for their
                  customer support.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Mr. Ariful Islam</h3>
                <h4>LearnFacts HS</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sheba Med is one of the best diagnstic center in our country. Their most advanced diagnstic technology and their customer services are very satisfactory.There service are always best.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Himel Sarker</h3>
                <h4>Developer of this System</h4>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>We have talent, experienced, reputed and dynamic doctors in our team working in a growing practice. All the doctors are whole heartedly waiting to help out the patients with majestic treatments. Our doctors are supported by practice nurses, management and clerical staff all providing high quality care to our patients.</p>
        </div>

        <div class="row">



          @foreach ($doctors as $doctor)

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset($doctor->profile->image ?? '/image/avatar.jpg')}}" class="card-img-top" alt="..." height="200px">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4> <a href="{{ route('view_doctor', $doctor->id) }}" value="{{$doctor->id}}"> {{$doctor->first_name .' '.$doctor->last_name ?? ""}}</a> </h4>
                <h5 class="card-title text-primary "> Specialities: {{$doctor->department->name ?? ""}}</h5>
                <h5 class="card-title "> Branch: {{$doctor->profile->state ?? ""}}</h5>
                <h5 class="card-title "> Practice Days: </h5>


                <p class="card-text text-success ">
                  @foreach(json_decode($doctor->profile->time_table) as $key => $value)
                    {{ $key }},
                  @endforeach

                </p>
              </div>
            </div>
          </div>

          @endforeach


        </div>


        <div class="row text-center justify-content-center">
          <div class="col-md-6">
            <a class="btn btn-sm btn-info" href="{{route('doctors')}}">See All Doctors</a>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->




    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some Photos of our Diagnostic Center and our internal service. Our aim to privide most advanced and best service all over the country.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{asset('fronend/assets/img/gallery/gallery-1.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-1.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{asset('frontend/assets/img/gallery/gallery-2.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-2.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{asset('frontend/assets/img/gallery/gallery-3.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-3.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img src="{{asset('frontend/assets/img/gallery/gallery-4.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img src="{{asset('frontend/assets/img/gallery/gallery-5.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img src="{{asset('frontend/assets/img/gallery/gallery-6.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img src="{{asset('frontend/assets/img/gallery/gallery-7.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img src="{{asset('frontend/assets/img/gallery/gallery-8.jpg')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Sheba Med started its journey in June 2022 and within few days due to its accuracy of the reports and quality of the service, Popular became an unparallel symbol of reliability and trust from the end of respective doctors and the people of our country. To get any service and support from us, please contact us.</p>
        </div>

      </div>

      <div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.732289518945!2d89.48559791539333!3d24.460071767210664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdc9e2a90ea05f%3A0xcbb13c99eb89d646!2sHimel&#39;s%20Home!5e0!3m2!1sen!2sbd!4v1658642934648!5m2!1sen!2sbd" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container">

          <div class="row mt-5">

            <div class="col-lg-6">

              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Dhubil Katermahal, Salanga, Sirajganj</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>himelsarker85@gamil.com<br>himelsarker010@gamil.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+88 01795114407<br>+88 01785482050</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
    </section>
  </main>
  <!-- End Contact Section -->


</x-frontend.layouts.master>