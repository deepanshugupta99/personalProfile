<?php
session_start();
if(isset($_SESSION['uname'])){
    echo $_SESSION['uname'];
}
else{
    echo "<script> alert('access denied'); window.location.assign('index.php'); </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>