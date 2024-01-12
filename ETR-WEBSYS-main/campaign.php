<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Events</title>
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
                    <li class="nav-item">
                        <a class="nav-link text-light" href="submit.php">Submit a Campaign</a>
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

    <main>
    <div class="py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-5">
            <!-- Your existing card designs -->
            <?php
            $existing_cards = '
                <div class="col">
                    <div class="card shadow-sm">
                    <img src="https://johnson.armymwr.com/application/files/2316/4856/2825/Chalk_The_Walk_Website-01.png" class="bd-placeholder-img card-img-top" width="150%" height="300" alt="Placeholder: Thumbnail">
                    <div class="card-body">
                    <h2 class="text-center mb-3">Chalk the walk</h1>
                        <p class="card-text">"Chalk the Walk at Pangasinan State University - Urdaneta Campus is a vibrant school event where creativity knows no bounds. 
                            Students, teachers, and staff come together to transform pathways into colorful canvases, showcasing a burst of artistic expression and fostering a sense of community pride. 
                            Through chalk art, our campus comes alive with positivity, diversity, and the boundless imagination of our school community."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                               <a href="home.php"><button type="button" class="btn btn-sm btn-outline-secondary">DONATE</button></a>
                            </div>
                            <small class="text-body-secondary">Urdaneta Campus</small>
                        </div>
                    </div>
                </div>
                </div>  
                <div class="col">
                <div class="card shadow-sm">
                    <img src="https://res.cloudinary.com/solt/image/upload/c_scale,q_90,f_auto,fl_progressive/v1524658735/centre_Stephen_Leask_Dewey_Finn_and_the_Kids_of_School_of_Rock._Photo_credit_Tristram_Kenton_2_uryh3q.jpg" class="bd-placeholder-img card-img-top" width="150%" height="300" alt="Placeholder: Thumbnail">
                    <div class="card-body">
                    <h2 class="text-center mb-3">Battle of the Bands</h1>
                    <p class="card-text">"Lingayen Campus at Pangasinan State University takes center stage in the Battle of the Bands—an electrifying event that amplifies the musical talents of our students. 
                        Bands compete for the spotlight, showcasing their passion and creativity, while the campus comes alive with the beat of diverse musical genres. 
                        Join us for a night of rhythm, harmony, and fierce competition as we celebrate the vibrant musical culture at Pangasinan State University - Lingayen Campus."</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">DONATE</button>
                            </div>
                            <small class="text-body-secondary">Lingayen Campus</small>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <br>
        <br>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-5">
        <div class="col">
            <div class="card shadow-sm">
                <img src="https://urdaneta.psu.edu.ph/wp-content/uploads/2022/07/Student4-scaled-1.jpg" class="bd-placeholder-img card-img-top" width="150%" height="350" alt="Placeholder: Thumbnail">
                <div class="card-body">
                <h2 class="text-center mb-3">Batch 2015 ALUMNI</h1>
                    <p class="card-text">
                        "Lingayen Campus at Pangasinan State University proudly celebrates the achievements and camaraderie of the Class of 2015. 
                        Our School Alumni event is a joyous reunion where graduates from 2015 reconnect, reminisce, and share their post-graduation journeys. 
                        This gathering serves as a testament to the enduring bonds forged during their time at PSU Lingayen Campus. 
                        Join us in honoring the accomplishments of our esteemed alumni from Batch 2015 and celebrating the lasting impact they continue to make in their respective fields."</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">DONATE</button>
                        </div>
                        <small class="text-body-secondary">Lingayen Campus</small>
                    </div>
                </div>
            </div>
        </div>  
            ';

            echo $existing_cards; // Output your existing cards

            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "lab_activity_5";

            // Create connection
            $conn = new mysqli($host, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $sql = "SELECT * FROM thumbnails WHERE `status`='Approved' "; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Outputting accepted entries as cards
                    echo '<div class="col">
                            <div class="card shadow-sm">
                                <img src="' . $row['image_path'] . '" class="card-img-top" alt="Thumbnail Image">
                                <div class="card-body">
                                    <h2 class="text-center mb-3">' . $row['thumbname'] . '</h2>
                                    <p class="card-text">' . $row['description'] . '</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="home.php"><button type="button" class="btn btn-sm btn-outline-secondary">DONATE</button></a>
                                        </div>
                                        <small class="text-body-secondary">Event Expiration: '. $row ['expiration'].'</small>
                                        <small class="text-body-secondary">' . $row['campus'] . '</small>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            } 

            $conn->close();
            ?>
        </div>
    </div>
</div>

    </main>
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