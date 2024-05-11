<?php

session_start();
session_destroy();
header('location:http://localhost/Cs_Basics/logout.html');
exit();

?>

