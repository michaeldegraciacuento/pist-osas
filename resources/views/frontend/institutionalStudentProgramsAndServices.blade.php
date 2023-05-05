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
            <a class="navbar-brand" href="#">
              <img src="{{asset('metis-assets/pist.jpeg')}}" alt="" style="width:70px;height:70px;"> PIST OSAS
            </a>
            <button class="navbar-toggler" type="button" data-toggle="side-menu" data-target="#sideMenuHeaders07" aria-controls="sideMenuHeaders07" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" contenteditable="false">
              <ul class="navbar-nav position-absolute top-50 start-50 translate-middle">
                <li class="nav-item fw-bold me-2"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item fw-bold"><a class="nav-link" href="{{url('/services')}}" contenteditable="false">Services</a></li>
                <li class="nav-item fw-bold me-2"><a class="nav-link" href="{{url('/about-us')}}">About Us</a></li>
                <li class="nav-item fw-bold me-2"><a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a></li>
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
          </nav>
          
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
      <a class="btn btn-outline-primary w-100 mb-2" href="{{'/login'}}">Log in</a>
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
                        
      <section class="py-5" style="background-repeat: no-repeat; background-position: top; background-image: url('metis-assets/elements/blob.svg');">
  <div class="container">
    <div class="position-relative py-5">
      <div class="position-absolute" style="top: 0; left: 0;">
        <img class="img-fluid" src="metis-assets/elements/dots-left.svg" alt="">
      </div>
      <div class="row">
        <div class="col-12 col-lg-7 py-5 mx-auto text-center">
          <h2 class="mb-3 fs-1 fw-bold">
            <span>Institutional</span>
            <span class="text-primary">Student Program</span>
            <span>and Services</span>
        
          <div class="row py-4 justify-content-center" style="font-size:15px;">
          It refers to the services and initiatives created to proactively address the basic requirements of kids, especially those with special needs and disabilities, for food, shelter, and safety. </div>
        </div>
      </div>
      <div class="position-absolute" style="bottom: 0; right: 0;">
        <img class="img-fluid" src="metis-assets/elements/dots-right.svg" alt="">
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <a href="{{url('/')}}" style="text-decoration:none;">
        <div class="p-5 text-center bg-white shadow-sm rounded">
          <div class="d-inline-block py-3 px-4 bg-light rounded-circle text-primary fw-bold">1</div>
          <img class="img-fluid my-4" height="192" src="metis-assets/illustrations/people-watching.png" alt="">
          <h5 class="mb-3">Admission Services</h5>
          <p class="text-muted">Student activities are extracurricular programs, events, and organizations that provide opportunities for students to engage in social, cultural, athletic, and community service activities outside of the classroom.</p>
        </div>
        </a>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <a href="{{url('/')}}"style="text-decoration:none;">
        <div class="p-5 text-center bg-white shadow-sm rounded">
          <div class="d-inline-block py-3 px-4 bg-light rounded-circle text-primary fw-bold">2</div>
          <img class="img-fluid my-4" height="192" src="metis-assets/illustrations/work-tv.png" alt="">
          <h5 class="mb-3">Health Services</h5>
          <p class="text-muted">You can concentrate more time on the most successful aspects of your company.</p>
        </div>
        </a>
      </div>
      <div class="col-12 col-lg-4 mb-4">
      <a href="{{url('/')}}"style="text-decoration:none;">
        <div class="p-5 text-center bg-white shadow-sm rounded">
          <div class="d-inline-block py-3 px-4 bg-light rounded-circle text-primary fw-bold">3</div>
          <img class="img-fluid my-4" height="192" src="metis-assets/illustrations/working-from-airport.png" alt="">
          <h5 class="mb-3">Safety and Security</h5>
          <p class="text-muted">You can concentrate more time on the most successful aspects of your company.</p>
        </div>
</a>
      </div>
      <div class="col-12 col-lg-4 mb-4">
      <a href="{{url('/economic-enterprise-development')}}"style="text-decoration:none;">
        <div class="p-5 text-center bg-white shadow-sm rounded">
          <div class="d-inline-block py-3 px-4 bg-light rounded-circle text-primary fw-bold">4</div>
          <img class="img-fluid my-4" height="192" src="metis-assets/illustrations/financial-report.png" alt="">
          <h5 class="mb-3">Services for Students with Special Needs & PWDs</h5>
          <p class="text-muted">You can concentrate more time on the most successful aspects of your company.</p>
        </div>
</a>
      </div>
      <div class="col-12 col-lg-4 mb-4">
      <a href="{{url('/')}}"style="text-decoration:none;">
        <div class="p-5 text-center bg-white shadow-sm rounded">
          <div class="d-inline-block py-3 px-4 bg-light rounded-circle text-primary fw-bold">5</div>
          <img class="img-fluid my-4" height="192" src="metis-assets/illustrations/gamer.png" alt="">
          <h5 class="mb-3">Cultural and Arts Programs</h5>
          <p class="text-muted">You can concentrate more time on the most successful aspects of your company.</p>
        </div>
      </a>
      </div>
      <div class="col-12 col-lg-4 mb-4">
      <a href="{{url('/')}}"style="text-decoration:none;">
        <div class="p-5 text-center bg-white shadow-sm rounded">
          <div class="d-inline-block py-3 px-4 bg-light rounded-circle text-primary fw-bold">6</div>
          <img class="img-fluid my-4" height="192" src="metis-assets/illustrations/gamer.png" alt="">
          <h5 class="mb-3">Sports Development Programs</h5>
          <p class="text-muted">You can concentrate more time on the most successful aspects of your company.</p>
        </div>
      </a>
      </div>
      
    </div>
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
              <li><a class="me-5 text-decoration-none text-dark fs-5 fw-bold" href="{{url('/')}}">Home</a></li>
                <li><a class="me-5 text-decoration-none text-dark fs-5 fw-bold" href="{{url('/about-us')}}">About Us</a></li>
                <li><a class="me-5 text-decoration-none text-dark fs-5 fw-bold" href="{{url('/contact-us')}}">Contact Us</a></li>
                <li><a class="text-decoration-none text-dark fs-5 fw-bold" href="{{url('/services')}}">Services</a></li>
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
