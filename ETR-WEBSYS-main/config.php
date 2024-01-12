<?php 

// Define PayPal credentials
define('PAYPAL_SANDBOX', TRUE); // TRUE = Sandbox | FALSE = Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'AaFpFmo3Wve1FTE0-ecIAbE0B3KEIyPsqxbBDR7N25jivsEl5ubMWY-WHZcd3cAMdboXml8Y4xB3KJ1G'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EAWrODRNLGvpHXV6QKWZinriDRzkClLvLmBsxlIZjnBodU-xGTPuSloEGnTmibiwXK0_LBjs_Tdcirq0'); 
define('PAYPAL_PROD_CLIENT_ID', 'Insert_Live_PayPal_Client_ID_Here'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'Insert_Live_PayPal_Secret_Key_Here'); 
  
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lab_activity_5');


// Initialize amount variable
$amount = 0;

// Handle form submission and donation processing
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['donationAmount']) && isset($_GET['firstName']) && isset($_GET['lastName'])) {
    // Create a database connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  
    // Display error if failed to connect  
    if ($conn->connect_errno) {  
        printf("Connect failed: %s\n", $conn->connect_error);  
        exit();  
    }

    $amount = $_GET['donationAmount'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];

}
 
// Product Details 
$itemNumber = "DP12345"; 
$itemName = "Demo Product"; 
$itemPrice = $amount; 
$currency = "PHP"; 


?>
