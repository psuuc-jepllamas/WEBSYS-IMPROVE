<?php

include_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = $_POST['username'];
    $userpassword = $_POST['password'];

    // Fetch user information for verification
    $query = "SELECT * FROM useracct WHERE name = '$username' AND password = '$userpassword'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if any rows are returned
        if (mysqli_num_rows($result) > 0) {
            // User credentials are valid
            // Perform login actions (e.g., set session variables, redirect to homepage)
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['id'];
            header('Location: homepage.php');
            exit();
        } else {
            // Authentication failed
            echo "<script>
                    $(document).ready(function(){
                        $('#errorModal').modal('show');
                    });
                  </script>";
        }
    } else {
        // Query execution failed
        echo "<script>alert('Error executing query.');</script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Google Fonts - Montserrat -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url('https://www.pmworld360.com/wp-content/uploads/2020/10/Meeting-Issues.png');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Adjust the alpha channel for darkness */
            z-index: -1;
        }

        img {
        width: 35px;
        height: 35px;
        margin: 0 5px;
        }

        #psulogo{
        width: 70px;
        height: auto;
        margin: 0 5px;
        margin-bottom: 5px;
        }
    </style>
</head>

<body>



    <!-- Navigator -->

    <header class="p-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="nav-link text-white px-5" href="lp.html" ><h4><b>Fund<span class="text-success">Me</span></b></h4></a></li>
                </ul>

                <div class="text-end">
                    <a href="register.php"><button type="button" class="btn btn-outline-success text-white me-2 rounded-3">Register</button></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Body -->

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <img src="img/Pangasinan_State_University_logo.png" alt="Image 2" id="psulogo">
                <h2 class="display-6 fw-bold lh-1  mb-3 text-white">Login to</h2>
                <h1 class="display-3 fw-bold lh-1  mb-3 text-white">Fund<span
                        class="text-success">Me</span></h1>
                <p class="col-lg-10 fs-5 text-white">Embracing the ethos of giving enriches our lives, as each act of
                    kindness and generosity contributes to a more compassionate and interconnected global community.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">

<form class="p-4 p-md-5" action="login.php" method="post">
                    <div class="form-floating mb-3 custom-textfield">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3 custom-textfield">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <hr class="my-2">

                    <button class="w-100 btn btn-lg btn-success text-white" type="submit" name="submit" id="submit">Log in</button>
                    <hr class="my-2">
</form>
            </div>
        </div>
    </div>

</body>

</html>