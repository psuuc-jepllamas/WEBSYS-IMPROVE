<?php
require_once 'dbConnect.php';

// Function to insert data into the database
function insertDonationData($amount, $firstName, $lastName, $conn) {
    $stmt = $conn->prepare("INSERT INTO `transactions`(`amount`, `firstname`, `lastname`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $amount, $firstName, $lastName);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Handle form submission and donation processing
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['donationAmount']) && isset($_GET['firstName']) && isset($_GET['lastName'])) {
    // Create a database connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Display error if failed to connect
    if ($conn->connect_error) {
        die("Connect failed: " . $conn->connect_error);
    }

    $amount = $_GET['donationAmount'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];

    // Call the function to insert data into the database
    insertDonationData($amount, $firstName, $lastName, $conn);

    // Redirect to payment confirmation page with form data
    header("Location: payment.php?donationAmount=$amount&firstName=$firstName&lastName=$lastName");
    exit();
}
?>


<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="#">
                <img src="fundme.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top "> <i>FundMe</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="campaign.php">Campaign Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#Footer">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.html">
                            <button class="btn btn-info" type="button">Log Out</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<br>


    <div class="container">
        <div class="py-5 text-center">
            <h2>Transaction</h2>
        </div>
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form class="needs-validation" method="GET" action="home.php">
                <div class="mb-3">
                        <label for="donationAmount">Donation Amount</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&#8369;</span>
                            </div>
                            <input type="number" class="form-control" name="donationAmount" required>
                            <div class="invalid-feedback">Please enter the amount you want to donate.</div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" name="firstName" id="firstNameInput" required>
                    <div class="invalid-feedback">Valid first name is required.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" name="lastName" id="lastNameInput" required>
                    <div class="invalid-feedback">Valid last name is required.</div>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Mobile</label>
                        <input type="number" class="form-control" name="mobile" >
                        <div class="invalid-feedback"> Please enter a valid mobile number. </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" >
                        <div class="invalid-feedback"> Please enter a valid email address. </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address"  required>
                        <div class="invalid-feedback"> Please enter your address. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="address">Town</label>
                        <input type="text" class="form-control" name="city" required>
                        <div class="invalid-feedback"> Please enter a valid city. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="address">City/Province</label>
                        <input type="text" class="form-control" name="state" required>
                        <div class="invalid-feedback"> Please enter a valid state. </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                        <label for="address">Country</label>
                        <input type="text" class="form-control" name="address" required>
                        <div class="invalid-feedback"> Please enter a valid country. </div>
                        </div>
                        <div class="col-md-4 mb-3">
                        <label for="zip">Zip (4-digit)</label>
                        <input type="text" class="form-control" name="zip" id="zipInput" required>
                        <div class="invalid-feedback"> Please enter a valid 4-digit zip code. </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>  
    </div>

    <br>

    <footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 mb-3">
                <h5>FundMe</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About Us</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4 mb-3">
                <h5>Contact</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">fundMe@gmail.com</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">+63 912 5100 133</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Urdaneta City, Pangasinan</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4 mb-0 lead fw-semibold">
                <p>"PSU-FundMe"</p>
            </div>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2023 FundMe, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    document.getElementById('zipInput').addEventListener('input', function (e) {
        let inputValue = e.target.value;
        let regex = /^\d{4}$/; // Regular expression to match exactly 4 digits

        if (!regex.test(inputValue)) {
            e.target.setCustomValidity('Please enter a valid 4-digit zip code.');
        } else {
            e.target.setCustomValidity('');
        }
    });

     function isAlpha(value) {
        return /^[A-Za-z]+$/.test(value);
    }

    document.getElementById('firstNameInput').addEventListener('input', function (e) {
        if (!isAlpha(e.target.value)) {
            e.target.setCustomValidity('Please enter a valid first name.');
        } else {
            e.target.setCustomValidity('');
        }
    });

    document.getElementById('lastNameInput').addEventListener('input', function (e) {
        if (!isAlpha(e.target.value)) {
            e.target.setCustomValidity('Please enter a valid last name.');
        } else {
            e.target.setCustomValidity('');
        }
    });
</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

