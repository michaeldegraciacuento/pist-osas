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
            <span>Student</span>
            <span class="text-primary">Handbook</span>
            <span>Development</span>
        
         
        </div>
      </div>
      <div class="position-absolute" style="bottom: 0; right: 0;">
        <img class="img-fluid" src="metis-assets/elements/dots-right.svg" alt="">
      </div>
    </div>
  </div>
</section>
<section class="py-5 mb-5">
  <div class="container">
    
      <div class="row">
      <div class="col-12 col-lg-6 y-5">
        <div class=" h-100">
          <div class="col-8 col-lg-10 mx-auto">
           <p class="fs-bold fs-3">What is Student Handbook Development?</p>
           <p class="fs-bold fs-5">
           Developing a student handbook is an important process that requires careful planning and attention to detail. A student handbook is a document that outlines the rules, policies, and procedures that students are expected to follow while attending an educational institution. The handbook should be comprehensive and informative, providing students with a clear understanding of what is expected of them and what they can expect from the institution. ​</p>
          </div>
        
        </div>
        
      </div>
      <div class="col-12 col-lg-6 py-5 py-lg-0 d-flex flex-column align-items-center justify-content-center">
      <div class="row h-100">
          <div class="col-8 col-lg-10 mx-auto d-flex align-items-center">
            <img class="img-fluid" src="metis-assets/illustrations/gamer.png" alt="" >
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
