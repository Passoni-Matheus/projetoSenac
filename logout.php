<?php

session_start();


session_destroy();
header('Location: preLogin.php');
exit();


?>