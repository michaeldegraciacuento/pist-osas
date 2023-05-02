<!DOCTYPE html>
<html lang="en">
<head>
    <title>OSAS Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-bootstrap.png">
</head>
<body>
    <div class="">
                        
      <section><div class="container pb-5">
          <nav class="position-relative navbar navbar-expand-lg navbar-light py-3 mb-5">
            <a class="navbar-brand" href="{{url('/')}}">
              <img src="{{asset('metis-assets/pist.jpeg')}}" alt="" style="width:70px;height:70px;"> PIST OSAS
            </a>
            <button class="navbar-toggler" type="button" data-toggle="side-menu" data-target="#sideMenuHeaders07" aria-controls="sideMenuHeaders07" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" contenteditable="false">
              <ul class="navbar-nav position-absolute top-50 start-50 translate-middle">
                <li class="nav-item me-2"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/services')}}" contenteditable="false">Services</a></li>
                <li class="nav-item me-2"><a class="nav-link" href="{{url('/about-us')}}">About Us</a></li>
                <li class="nav-item me-2"><a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a></li>
              </ul>
      <div class="ms-auto">
      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a class="btn btn-outline-primary w-100 mb-2" href="{{url('/dashboard')}}">Home</a>
                    @else
                    <a class="btn btn-outline-primary w-100 mb-2" href="{{url('/login')}}">Log in</a>

                       
                    @endauth
                </div>
            @endif
      </div>
            </div>
          </nav><div class="row">
            <div class="col-12 col-lg-6 mx-auto text-center text-lg-start">
              <div class="col-md-8 col-lg-10 mx-auto mx-lg-0 pt-lg-5 pb-4">
                <h2 class="mb-3 fs-1 fw-bold">
                  <span>Office of the</span>
                  <span class="text-primary">Student's</span>
                  <span>Affairs and Services</span>
                </h2>
                <p class="pe-lg-5 text-muted lh-lg mb-0"> OSAS provides services such as counseling, advising, career support, and extracurricular activities to ensure student welfare, development, and academic success.</p>
              </div>
              <div>
      <a class="me-2 btn btn-primary" href="#">Book Appointment </a><a class="btn btn-outline-primary" href="#">Get Started</a>
      </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
              <div>
                <img class="img-fluid" src="metis-assets/illustrations/work-tv.png" alt="">
      </div>
            </div>
          </div>
        </div>
        <div class="d-none fixed-top top-0 bottom-0" id="sideMenuHeaders07">
          <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-dark" style="opacity: 0.7"></div>
          <nav class="navbar navbar-light position-absolute top-0 bottom-0 start-0 w-75 pt-3 pb-4 px-4 bg-white" style="overflow-y: auto;"><div class="d-flex flex-column w-100 h-100">
              <div class="d-flex justify-content-between mb-4">
                <a href="#">
                  <img class="img-fluid" src="metis-assets/logos/metis/metis.svg" alt="" width="106"></a>
                <button class="btn-close" type="button" data-toggle="side-menu" data-target="#sideMenuHeaders07" aria-controls="sideMenuHeaders07" aria-label="Close"></button>
              </div>
              <div>
                <ul class="navbar-nav mb-4">
      <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{url('/services')}}">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="{url('/about-us')}}">Abouts Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="{url('/contact-us')}}">Contact Us</a></li>
                </ul>
      <div class="border-top pt-4 mb-5">
      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a class="btn btn-outline-primary w-100 mb-2" href="{{url('/dashboard')}}">Home</a>
                    @else
                    <a class="btn btn-outline-primary w-100 mb-2" href="{{url('/login')}}">Log in</a>

                       
                    @endauth
                </div>
            @endif
      </div>
              </div>
              <div class="mt-auto">
                <a class="me-2" href="#">
                  <img src="metis-assets/icons/facebook-blue.svg" alt=""></a>
                <a class="me-2" href="#">
                  <img src="metis-assets/icons/twitter-blue.svg" alt=""></a>
                <a class="me-2" href="#">
                  <img src="metis-assets/icons/instagram-blue.svg" alt=""></a>
              </div>
            </div>
          </nav>
      </div>
      </section>
                        
      
                        
      <section class="position-relative py-5 bg-primary" style="overflow: hidden; z-index: 1;">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 col-lg-6 mx-auto mb-4 text-center text-lg-left">
              <h2 class="mb-3 fs-1 text-white fw-bold">
                <span>Build  </span>
                <span class="text-warning">Opportunities</span>
                <span>for Student Success.</span>
              </h2>
              <p class="text-white-50 mb-0">If opportunity doesn’t knock, build a door.</p>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
              <div class="row justify-content-center justify-content-lg-end">
                <div class="col-12 col-md-6 col-lg-8 mb-3 mb-md-0">
                  <div class="input-group">
                    <span class="input-group-text px-3 bg-light rounded-left">
                      <svg width="24" height="24" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                      </svg>
                    </span>
                    <input class="form-control" type="text" placeholder="Type your e-mail">
                  </div>
                </div>
                <div class="col-12 col-md-auto">
                  <button class="w-100 btn btn-light" type="submit">Sign Up</button>
                </div>
              </div>
            </div>
          </div>
          <img class="d-none d-lg-block position-absolute img-fluid top-0 left-0" style="margin-top: -250px; margin-left: -150px; z-index: -5;" src="metis-assets/elements/square-rotated.svg" alt="">
        </div>
      </section>
      <section class="py-5 overflow-hidden">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="position-relative col-12 col-lg-6 order-last mt-5 mt-lg-0">
        <img class="position-relative mx-auto rounded w-100" style="z-index:10" src="https://images.unsplash.com/photo-1536940135352-b4b3875df888?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;h=1200&amp;q=80" alt="">
        <img class="img-fluid position-absolute" width="160" height="160" style="top:0; left:0; margin-left: -48px; margin-top: -48px;" src="metis-assets/elements/blob-tear.svg" alt="">
        <img class="img-fluid position-absolute" width="160" height="160" style="right:0; bottom:0; margin-right: -48px; margin-bottom: -48px;" src="metis-assets/elements/blob-tear.svg" alt="">
      </div>
      <div class="col-12 col-lg-6 py-5">
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto">
            <span class="badge rounded-pill bg-primary">PIST OSAS</span>
            <h2 class="mt-3 mb-5 fs-1 fw-bold">Key Features</h2>
            <div class="d-flex mb-4 pb-1">
              <span class="me-4 text-primary">
                <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </span>
              <div>
                <h5>MISSION</h5>
                <p class="mb-0 text-muted lh-lg">OSAS (PIST) is committed to provide the students, its main clientele, and other sectors of academic community with outstanding  and effective services as well as developmental opportunities that amplifies their academic experiences.</p>
              </div>
            </div>
            <div class="d-flex mb-4 pb-1">
              <span class="me-4 text-primary">
                <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                </svg>
              </span>
              <div>
                <h5>VISION</h5>
                <p class="mb-0 text-muted lh-lg">OSAS (PIST) aspires to be  the premier provider of services and programs, as well as  envisions producing humane, well-equipped , and globally competitive human resources. </p>
              </div>
            </div>
            <div class="d-flex">
              <span class="me-4 text-primary">
                <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                </svg>
              </span>
              <div>
                <h5>CORE VALUES</h5>
                <p class="mb-0 text-muted lh-lg">OSAS (PIST) define who we are as an institution. It percolates in everything we say and do as an institution, and we are committed  to exhibit these values as we work and interact with our students and other sectors of academic community. These core values include: Selfless Dedication, Humility, Integrity and Competence</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5 bg-primary">
  <div class="row">
    <div class="col-12 col-md-8 col-lg-6 mx-auto text-center">
      <span class="badge rounded-pill bg-warning">2K23</span>
      <h2 class="mt-3 mb-4 fs-1 fw-bold text-light">We want you to connect with us</h2>
      <div><a class="btn btn-light" href="#">Contact Us</a></div>
    </div>
  </div>
</section>             
      <section class="py-5">
        <div class="container">
          <h2 class="mb-4 fw-bold">Our Blog</h2>
          <div class="row mb-5">
          @foreach($news as $news)
            <div class="col-12 col-lg-6 py-4 pr-lg-5">
              <span class="badge bg-primary rounded-pill">News</span>
              <h4 class="my-4 fw-bold">{{$news->title}}</h4>
              <h6 class="my-4 fw-bold">{{$news->date}}</h6>
              <p class="mb-4 lh-lg text-muted">{{substr($news->content, 0, 70 )}}...</p>
              <a class="text-decoration-none" href="{{ ('/news-post') }}">
                <span>Read More</span>
                <svg class="d-inline-block ms-1" height="16" width="16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
              </a>
            </div>
            <div class="col-12 col-lg-6">
              <img class="w-100 rounded" style="object-fit: cover; height: 20rem;" src="{{asset('public/'.$news->image) }}" alt="">
            </div>
            @endforeach
          </div>
          <div class="row mb-5">
          @foreach($announcement as $announcement)
            <div class="col-12 col-lg-6 py-4 order-lg-1 pl-lg-5">
              <span class="badge bg-primary rounded-pill">Announcement</span>
              <h4 class="my-4 fw-bold">{{ $announcement->title }}</h4>
              <h6 class="my-4 fw-bold">{{$announcement->date}}</h6>
              <p class="mb-4 text-muted lh-lg">{{substr($announcement->content, 0, 70 )}}...</p>
              <a class="text-decoration-none" href="{{ ('/announcements-post') }}">
                <span>Read More</span>
                <svg class="d-inline-block ms-1" height="16" width="16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
              </a>
            </div>
            <div class="col-12 col-lg-6 order-lg-0">
              <img class="w-100 rounded" style="object-fit: cover; height: 20rem;" src="{{asset('public/'.$announcement->image) }}" alt="">
            </div>
            @endforeach
          </div>
          <div class="row mb-5">
          @foreach($event as $event)
            <div class="col-12 col-lg-6 py-4 pr-lg-5">
             
              <span class="badge bg-primary rounded-pill">Activities</span>
              <h4 class="my-4 fw-bold">{{ $event->title }}</h4>
              <h6 class="my-4 fw-bold">{{$event->date}}</h6>
              <p class="mb-4 text-muted lh-lg"><{{substr($event->content, 0, 70 )}}.../p>
              <a class="text-decoration-none" href="{{ ('/activites-post') }}">
                <span>Read More</span>
                <svg class="d-inline-block ms-1" height="16" width="16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
              </a>
             
            </div>
            <div class="col-12 col-lg-6">
              <img class="w-100 rounded" style="object-fit: cover; height: 20rem;" src="{{asset('public/'.$event->image) }}" alt="">
            </div>
            @endforeach
          </div>
          <div class="row mb-5">
            
            <div class="col-12 col-lg-6 order-0">
              
            </div>
          </div>
          <div class="text-center"></div>
        </div>
      </section>
                        
      <section class="py-5">
        <div class="container">
          <div class="row mb-4">
            <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center text-lg-left">
              <a class="navbar-brand" href="#">
                <img class="img-fluid" src="metis-assets/pist.jpeg" alt="" style="width:70px;height:70px;"> PIST OSAS
              </a>
            </div>
            <div class="col-12 col-lg-9 d-flex justify-content-center justify-content-lg-end">
              <ul class="d-flex list-unstyled flex-wrap">
                <li><a class="me-5 text-decoration-none text-dark fs-5 fw-bold" href="#">Home</a></li>
                <li><a class="me-5 text-decoration-none text-dark fs-5 fw-bold" href="#">About Us</a></li>
                <li><a class="me-5 text-decoration-none text-dark fs-5 fw-bold" href="#">Contact Us</a></li>
                <li><a class="text-decoration-none text-dark fs-5 fw-bold" href="#">Services</a></li>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12 col-lg-6 text-center text-lg-left order-1 order-lg-0">
              <p class="small text-muted mb-0">© 2023. All rights reserved.</p>
            </div>
            <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center text-lg-right">
              <a class="me-3" href="#">
                <img src="metis-assets/icons/facebook-blue.svg" alt="">
              </a>
              <a class="me-3" href="#">
                <img src="metis-assets/icons/twitter-blue.svg" alt="">
              </a>
              <a href="#">
                <img src="metis-assets/icons/instagram-blue.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
            </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
