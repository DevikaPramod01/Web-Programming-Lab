<?php
include "conn.php";
if(isset($_POST["ok"]))
{
    $a=$_POST["name"];
    $b=$_POST["pass"];
    session_start();
    $_SESSION['name']=$a;
    $sq="select * from login where username='$a' and password='$b'";
    $res=mysqli_query($conn,$sq);
    $row=mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)>0)
    {
        header("location:home.php");
    }
    else
    {
        echo "invalid username or password....";
    }
}
?>