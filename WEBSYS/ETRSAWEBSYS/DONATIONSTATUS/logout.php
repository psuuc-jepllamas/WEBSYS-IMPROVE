<?php
require('conn.php');
session_start();
session_destroy();
header("Location: /WEBSYS/ETRSAWEBSYS/LOGIN/login.php");
exit();
?>
