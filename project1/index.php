<?php
session_start();
if(isset($_SESSION['uname'])){
    echo "<script> alert('access denied'); window.location.assign('home.php'); </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deepanshu</title>
</head>
<body>
    
    <form action="submit.php" method="post">
        
        <input type="text" name="uname" placeholder="Enter name" />  </br>
        <input type="password" name="pass" placeholder="Enter Password" /></br>
        <input type="submit" name="login" value="login" />

    </form>


</body>
</html>



