<?php
if(isset($_POST['login'])){
    $name=$_POST['uname'];
    $password=$_POST['pass'];
    
    if($name=="dharmandra" && $password=="123456")
    {
        session_start();
        $_SESSION['uname']=$name;
        echo "<script> alert('login success'); window.location.assign('home.php'); </script>";

    }
    else
    {
        echo "<script> alert('login failed'); window.location.assign('index.php');</script>";
    }

}

else
{
    echo "<script> alert('abe kya chahte ho be'); window.location.assign('index.php');</script>";

}



?>