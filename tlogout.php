<?php
session_start();
$cookie_name=$_SESSION["tfname"];
setcookie($cookie_name, "", time() - 3600,"/");
session_unset();
session_destroy();
header("Location: http://localhost");
?>
