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
    <link rel="stylesheet" href="admin-style.css">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>

  <body>
    <!-- Navbar -->
    
        <nav class="navbar navbar-expand-lg navbar-dark" id="navbkg">
            <div class="container">
                <!-- App logo and name -->
                <a class="navbar-brand text-black" href="#">
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
                    <a class="nav-link link-dark" href="#hero">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-dark" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-dark" href="#">Help</a>
                  </li>
                </ul>
                  </li>
                </ul>
                <form class="d-flex" role="login">
                  <a href="login.php" class="btn btn-dark w-100 fs-6">Logout</a>
                </form>
              </div>
            </div>
          </nav>

            <!--Main area-->
            <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <h2 class="fs-2 m-0">Admin's Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">1000</h3>
                                <p class="fs-5">Total # of books</p>
                            </div>
                            <i class="fa-solid fs-1 border rounded-full p-3 fa-book"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">154</h3>
                                <p class="fs-5">Borrowed Books</p>
                            </div>
                            <i class="fa-solid fs-1 border rounded-full p-3 fa-hand-holding"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">41</h3>
                                <p class="fs-5">Users signed in</p>
                            </div>
                            <i class="fa-solid fs-1 border rounded-full p-3 fa-door-open"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">12</h3>
                                <p class="fs-5">New stocks</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 border rounded-full p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Book</th>
                                    <th scope="col">Name of borrower</th>
                                    <th scope="col">Due Date (MM/DD/YY)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>The Silmarillion</td>
                                    <td>Jonny</td>
                                    <td>1/2/2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Inferno</td>
                                    <td>Kenny</td>
                                    <td>12/12/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>The Catcher in the Rye</td>
                                    <td>Jenny</td>
                                    <td>3/19/2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>The Adventures of Sherlock Holmes</td>
                                    <td>Killy</td>
                                    <td>11/22/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Frankenstein</td>
                                    <td>Filly</td>
                                    <td>2/24/2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

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

  </body>
</html>
