<?php
include('conn.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
    } else {
        $query = "SELECT adminID FROM admins WHERE adminName = '$username' AND adminPassword = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['adminID'] = $row['adminID'];
            header("Location: /WEBSYS/ETRSAWEBSYS/DASHBOARD/adminDash.php");
            exit();
        } else {
            echo "<h1 class = 'text'>Invalid username or password.</h1>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>LOGIN</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/pexels-fauxels-3182781.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .wrapper{
            width: 420px;
            background-color: transparent;
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            color: white;
            border-radius: 10px;
            padding: 30px 40px;
        }
        .wrapper h3{
          text-align: center;
        }
        .wrapper h1{
            font-size: 36px;
            text-align: center;
        }
        .wrapper .input-box{
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }
        .input-box input{
            width: 100%;
            height: 100%;
            background-color: transparent;
            border: 2px solid rgb(255, 255, 255);
            border-radius: 40px;
            font-size: 16px;
            color: white;
            padding: 20px 45px 20px 30px;
        }
        .input-box input::placeholder{
            color: white;
        }
        .input-box i{
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }
        .wrapper .btn{
            width: 100%;
            height: 45px;
            background-color: rgb(97, 97, 97);
            border-radius: 40px;
            box-shadow: 0 0 10px white;
            cursor: pointer;
            font-size: 16px;
            color: #ffffff;
            font-weight: 600;
        }
        .wrapper .register-link{
            font-size: 15px;
            text-align: center;
            margin-top: 20px 0 15px;
        }
        .register-link p a{
            color: white;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link p a:hover{
            text-decoration: underline;
        }
        .text{
            color: white;
        }
        .text a{
            color: pink;
            text-decoration: none;
        }
        .text a:hover{
            text-decoration: underline;
        }

</style>
</head>
<body>
    <div class="wrapper">
        <h1>LOG IN HERE</h1>
        <br>
        <h3>FundMe++</h3>
        <form action="login.php" method="post">
            <div class="input-box">
                <input type="text" name="username" id="username" required placeholder="Username">
                <box-icon type='solid' name='user-circle'></box-icon>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" required placeholder="Password">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <button type="submit" class="btn">LOG IN</button>
            <br><br>
        </form>
    </div>
</body>
</html>