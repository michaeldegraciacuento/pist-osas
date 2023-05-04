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
                        
    
      <section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mx-auto text-center">
        <div class="row mb-5">
          <h2 class="fs-1 fw-bold">C O N T A C T &nbsp;&nbsp; U S</h2>
          <p>We will be glad to hear from you</p>
        </div>
        <div class="row">
          <div class="col-6 col-lg-4 mb-5">
            <span class="text-primary">
              <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
            </span>
            <h6 class="mb-2 mt-3 text-muted">Telephone</h6>
            <p class="mb-0">+63 221-3067</p>
            
          </div>
          <div class="col-6 col-lg-4 mb-5">
            <span class="text-primary">
              <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </span>
            <h6 class="mb-2 mt-3 text-muted">E-mail</h6>
            <p class="mb-0">
picardalpist@gmail.com</p>
          </div>
          <div class="col-12 col-lg-4 mb-5">
            <span class="text-primary">
              <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
            </span>
            <h6 class="mb-2 mt-3 text-muted">Address</h6>
            <p class="mb-0">2F Michaella’s Plaza, Tibanga</p>
            <p>Iligan City, 9200</p>
          </div>
        </div>
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
