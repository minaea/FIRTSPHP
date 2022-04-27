<?php
session_start();

session_unset();

session_destroy();
sleep(5);
header("Location: index.php");
 ?>
