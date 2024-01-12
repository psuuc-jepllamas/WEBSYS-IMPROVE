<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cuyapo Library Management System</title>

    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="img/book-icon-158.png"
    type="image/x-icon">

    <!-- Bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <!-- CSS link -->
    <link rel="stylesheet" href="student-style.css">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>

  <body>
    <!-- Navbar -->
    
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- App logo and name -->
                <a class="navbar-brand" href="#">
                    <img src="img/book-icon-158.png" alt="Logo" width="30" height="25" class="d-inline-block align-text-top" id="petfinder">
                    Cuyapo Library Management System
                  </a>

                  <!-- Navbar links -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link link-light" href="#hero">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-light" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-light" href="#">Help</a>
                  </li>
                </ul>
                  </li>
                </ul>
                <form class="d-flex" role="login">
                  <a href="login.php" class="btn btn-light w-100 fs-6">Logout</a>
                </form>
              </div>
            </div>
          </nav>

          <!-- Hero -->
      <section class="text-light" id="hero">
        <div class="container col-xxl-8 col-6 px-4 pt-5 pb-2">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/student.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Cuyapo Library Management System</h1>
                <p class="lead"><strong>Empowering Readers! Simplifying Learning! Cuyapo Library Management System: Explore, Discover, Grow, with Us! Your Gateway to a World of Knowledge!</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-light btn-lg px-4 me-md-2">Learn more</button>
                </div>
              </div>
            </div>
          </div>
      </section>
    </section>

    <!-- Services -->
    <section class="services" id="services">
      <div class="container px-4 py-5" id="custom-cards">
        <h2 class="text display-h1 fw-bold">Services</h2>
    
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card-cover h-100 overflow-hidden text-bg-dark rounded-4" id="catalog">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Cataloging and Classification</h3>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card-cover h-100 overflow-hidden text-bg-dark rounded-4" id="usermanage">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">User Management</h3>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card-cover h-100 overflow-hidden text-bg-dark rounded-4" id="circulation">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Circulation</h3>
              </div>
            </div>
          </div>
        </div>
  </section>

    <!-- Footer -->

    <section id="footer">
      <div class="container text-light">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
              <img src="img/book-icon-158.png" width="50" height="45" alt="">
            </a>
            <p class="text-white">&copy; 2023</p>
          </div>
      
          <div class="col mb-3 row g-4">
      
          </div>
      
          <div class="col-6 mb-3">
            <h5>Links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Categories</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Donate</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Adopt</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Reach out</a></li>
            </ul>
          </div>
      
          <div class="col-6 mb-3">
            <h5>Social media</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i class="fa-brands fa-facebook"></i>&nbsp; Cuyapo LMS</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i class="fa-brands fa-twitter"></i>&nbsp; @cuyapoLMS</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i class="fa-brands fa-instagram"></i>&nbsp; Cuyapo LMS</a></li>
            </ul>
          </div>

          <div class="col-6 mb-3">
            <h5>About us</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Staff</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Location</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">How we started</a></li>
            </ul>
          </div>
        </footer>
      </div>
</section>

<div class="copyright">
    <p>&copy; Copyright: Cuyapo Library Management System</p>
</div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
