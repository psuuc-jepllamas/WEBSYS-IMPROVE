<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $thumbname = $_POST['event'];
    $description = $_POST['description'];
    $campus = $_POST['campus'];
    $status = "Unapproved";
    $oras = $_POST['expiration'];

    // File upload handling for image
    $image_target_dir = "MANAGECAMPAIGNEVENTS/IMAGES/PHOTOS/";
    $image_target_file = $image_target_dir . basename($_FILES["poster"]["name"]);
    $image_uploadOk = 1;
    $imageFileType = strtolower(pathinfo($image_target_file, PATHINFO_EXTENSION));

    // Check if the image file is a valid image
    $check = getimagesize($_FILES["poster"]["tmp_name"]);
    if ($check !== false) {
        $image_uploadOk = 1;
    } else {
        echo "File is not a valid image.";
        $image_uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($image_target_file)) {
        echo "Sorry, the image file already exists.";
        $image_uploadOk = 0;
    }

    // Check file size (adjust as needed)
    if ($_FILES["poster"]["size"] > 5000000) {
        echo "Sorry, the image file is too large.";
        $image_uploadOk = 0;
    }

    // Allow only certain file formats (you can customize this list)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed for images.";
        $image_uploadOk = 0;
    }

    // Check if $image_uploadOk is set to 0 by an error
    if ($image_uploadOk == 0) {
        echo "Sorry, your image file was not uploaded.";
    } else {
        // If everything is ok, try to upload the image and insert into the database
        if (move_uploaded_file($_FILES["poster"]["tmp_name"], str_replace('\\', '/', $image_target_file))) {
            // Modify the path as per your requirement
            $base_path = "/WEBSYS-LAST-REVISE/ETR-WEBSYS-main";
            $image_path = $base_path . "/" . $image_target_file;

            // Prepared statement to prevent SQL injection
            $sql = "INSERT INTO `thumbnails` (`image_path`, `thumbname`, `description`, `created_at`, `campus`, `status`, `expiration`) VALUES (?, ?, ?, NOW(), ?, ?, ?)";

            // Use prepared statement
            $stmt = mysqli_prepare($conn, $sql);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, 'ssssss', $image_path, $thumbname, $description, $campus, $status, $oras);

            // Execute statement
            $result = mysqli_stmt_execute($stmt);

            // Check if the query was successful
            if ($result) {
                echo "Record inserted successfully";
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Sorry, there was an error uploading your image file.";
        }
    }
}
?>
<!-- Your HTML code here -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="#">
                <img src="fundme.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top "> <i>FundMe</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="campaign.php">Campaign Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#Footer">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="consult">
                    <a class="nav-link text-light " href="login.php">
                        <button class="btn btn-info" type="button">Log Out</button>
                    </a>
                </form>
            </div>
        </div>
    </nav>

<div class="container mt-5 mb-5">
  <div class="card p-4">
    <form method="post" action="submit.php" enctype="multipart/form-data">
      <div class="form-group mt-3">
        <label for="exampleFormControlSelect1">School Campus</label>
        <select name="campus" class="form-control" id="exampleFormControlSelect1">
          <option value="Alaminos">Alaminos</option>
          <option value="Asingan">Asingan</option>
          <option value="Bayambang">Bayambang</option>
          <option value="Binmaley">Binmaley</option>
          <option value="Infanta">Infanta</option>
          <option value="Lingayen">Lingayen</option>
          <option value="San Carlos City">San Carlos City</option>
          <option value="Santa Maria">Santa Maria</option>
          <option value="Urdaneta City">Urdaneta City</option>
        </select>
      </div>
      <div class="form-group mt-3">
        <label for="">Event Name</label>
        <br>
        <input type="text" class="form-control" name="event" id="">
      </div>    
      <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Event Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
      </div>
      <div class="form-group mt-3">
        <label for="">Event Expiration</label>
        <br>
        <input type="date" class="form-control" name="expiration" id="">
      </div>   
      <div class="form-group mt-3">
        <label for="exampleFormControlFile1">Event Poster</label>
        <br>
        <input type="file" name="poster" class="form-control-file mt-2" id="exampleFormControlFile1">
        </div>
   
    <div class="mt-4">
        <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4 rounded-pill" name="submit" type="submit">Submit</button>
      
    </div>
    </form>
  </div>
</div>

<section class="bg-dark text-light" id="Footer">
  <div class="container">
      <footer class="py-4">
          <div class="row">
          <div class="col-lg-4 col-md-2 mb-3">
              <h5>FundMe</h5>
              <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About Us</a></li>
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