<?php
require('conn.php');
session_start();
session_destroy();
header("Location: /WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/LOGIN/login.php");
exit();
?>
