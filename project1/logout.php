<?php
session_start();

session_destroy();

echo "<Script>alert('Logout successfully'); window.location.assign('index.php'); </script>";

?>