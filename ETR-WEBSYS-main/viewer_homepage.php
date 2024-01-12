<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="#">
                <img src="fundme.png" 
                alt="Logo" width="40" height="34" class="d-inline-block align-text-top rounded-5 me-2"> <i>FundMe</i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-light" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="viewer_campaign.php">Campaign Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#Footer">Contact Us</a>
              </li>              
            </ul>
            <form class="d-flex" role="consult">
              <a class="nav-link text-light " href="login.php">
              <button class="btn btn-info" type="button">Log Out</button></a>
            </form>
          </div>
        </div>
      </nav>
      <div class="p-5 text-center bg-image" style="
      background-image: url('https://satriyaadikaums.files.wordpress.com/2019/10/welcome-slider-1024x446.jpg?w=1024');
      background-repeat: no-repeat;
      background-size: cover;
      height: 690px;
      background-position: center;
      position: relative;">
      <div class="mask" style="
          background-color: rgba(0, 0, 0, 0.7);
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;">
          <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white mt-1">
                  <h1 class="mb-3">FundMe</h1>
                  <h4 class="mb-3 lead">A Crowd-Source Campaign for a Cause</h4>
              </div>
          </div>
      </div>
  </div>
  <section class="bg-dark text-light" id="Footer">
  <div class="container">
      <footer class="py-4">
          <div class="row">
          <div class="col-lg-4 col-md-2 mb-3">
              <h5>FundMe</h5>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="viewer_homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="campaign.php">Campaign Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#Footer">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="submit.php">Submit a Campaign</a>
                    </li>
                </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
              <h5>Contact</h5>
              <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">fundMe@gmail.com</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">+63 912 5100 133</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Urdaneta City, Pangasinan</a></li>
              </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-0 lead fw-semibold">     
              <p>"PSU-FundMe"</p>
          </div>
          </div>

          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2023 FundMe, Inc. All rights reserved.</p>
          </div>
      </footer>
  </div>
</section>
</body>
</html>