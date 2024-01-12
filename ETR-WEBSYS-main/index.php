<?php
include('conn.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="img/donation-removebg-preview.png"
    type="image/x-icon">

    <!-- CSS link -->
    <link rel="stylesheet" href="login-style.css" />

    <!-- Bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-size: cover;
      background-repeat: no-repeat;
      background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("img/pexels-fauxels-3182781.jpg");
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.5) !important;
      backdrop-filter: saturate(200%) blur(5px);
    }

    #dnt{
      box-shadow: 3px 5px;
    }

    a {
      text-decoration: none; /* Removes underline */
      color: white; /* Sets text color to white */
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
      <img src="img/370628981_770102005131583_2516729348802605080_n-removebg-preview.png" alt="" width="500" height="500">
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
<form action="login.php" method="post">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="username" name="username" class="form-control" />
                <label class="form-label" for="form3Example3">Username</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-success mb-4 w-100">
                Sign up
              </button>

              <!-- Don't have an account? -->
              <center>
                <button class="btn btn-success mb-4 w-50 mt-3" id="dnt"><a href="register.php">Don't have an account?</a></button>
              </center>

              <center>
              <div class="mt-3">
                  <?php

                      if (empty($username) || empty($password)) {
                          // Handle empty username or password
                          echo "Username and password are required.";
                      } else {
                          // Perform authentication
                          $query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
                          $result = $conn->query($query);

                          if ($result->num_rows == 1) {
                              // Authentication successful
                              $row = $result->fetch_assoc();
                              $_SESSION['user_id'] = $row['id'];
                              header("Location:/ETR-WEBSYS-main/homepage.php");
                              exit();
                          } else {
                              // Authentication failed
                              echo "Invalid username or password.";
                          }
                      }
                  ?>
            </div>
            </center>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->                    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
