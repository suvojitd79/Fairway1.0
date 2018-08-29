<?php

session_start();

unset($_SESSION['login_id']);
unset($_SESSION['designation']);

header('Location:http://localhost/Fairway1.1/FairwayVerified/login.php');
exit();

?>