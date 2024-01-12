<?php
include('conn.php');
session_start();

$id = isset($_GET['userID']) ? $_GET['userID'] : null;

if ($id !== null) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newUsername = isset($_POST['newUsername']) ? $_POST['newUsername'] : null;
        $newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : null;
        $newAddress = isset($_POST['newAddress']) ? $_POST['newAddress'] : null;
        $newCampus = isset($_POST['newCampus']) ? $_POST['newCampus'] : null;
        $newBirthdate = isset($_POST['newBirthdate']) ? $_POST['newBirthdate'] : null;

        if ($newUsername !== null && $newPassword !== null && $newAddress !== null && $newCampus !== null && $newBirthdate !== null) {
            $sql = "UPDATE useracct SET name = ?, password = ?, address = ?, campus = ?, birthdate = ? WHERE userID = ?";
            $stmt = mysqli_prepare($conn, $sql);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, 'sssssi', $newUsername, $newPassword, $newAddress, $newCampus, $newBirthdate, $id);

            // Execute the statement
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo "<script>alert('Record updated successfully!'); window.location.href = '/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/ACCOUNTMANAGEMENT/account.php';</script>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Please provide all required fields.";
        }
    }

    // Fetch current user data
    $selectSql = "SELECT * FROM useracct WHERE userID = '$id'";
    $selectResult = $conn->query($selectSql);

    if ($selectResult) {
        $userData = $selectResult->fetch_assoc();
    } else {
        echo "Error fetching user data: " . mysqli_error($conn);
        exit;
    }

    mysqli_free_result($selectResult);
} else {
    echo "UID not provided.";
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
        height: 100vh; /* Set the body height to the full viewport height */
        overflow-y: hidden; /* Hide vertical scrollbar */
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

    #psulogo {
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

            </div>
        </div>
    </header>

    <!-- Body -->

    <div class="container">
        <div class="row align-items-center g-lg-5 py-5">

<form class="p-4 p-md-5" method="post">
                    <div class="form-floating mb-3 custom-textfield">
                        <input type="text" name="newUsername" class="form-control" id="floatingInput" value="<?php echo $userData['username'] ?? ''; ?>" placeholder="name@example.com" required>
                        <label for="floatingInput">Username</label>
                    </div>

                    <div class="form-floating mb-3 custom-textfield">
                        <input type="text" name="newPassword" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating mb-3 custom-textfield">
                        <input type="text" name="newAddress" class="form-control" id="floatingPassword" value="<?php echo $userData['address'] ?? ''; ?>" placeholder="Address" required>
                        <label for="floatingPassword">Address</label>
                    </div>

                    <label style="color: white;">Campus:</label>
                      <select name="newCampus" class="form-control mb-3" id="campus" value="<?php echo $userData['campus'] ?? ''; ?>" required>
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

                    <label for="birthdate" style="color: white;">Birthdate:</label>
                    <input type="date" class="form-control" name="newBirthdate" value="<?php echo $userData['birthdate'] ?? ''; ?>" required>

                    <hr class="my-2">

                    <button class="w-100 btn btn-lg btn-success text-white" type="submit" name="submit" id="submit">Update</button>
                    <hr class="my-2">
</form>
            </div>
        </div>
    </div>

</body>

</html>