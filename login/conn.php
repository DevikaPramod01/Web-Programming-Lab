
<?php
$servername="localhost";
$username="root";
$password="";
$database="devika";

$conn=mysqli_connect("$servername", "$username", "$password", "$database");
if(!$conn)
{
    echo "connection failed".mysqli_connect.error();
}
/*else
{
    echo "connection successfull";
}*/

/*if(isset($_POST["ok"]));
{

$username=$_POST['name'];
$password=$_POST['pass'];
$sql="INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo " <script> alert ('data inserted') </script>";
}
else
{
    echo " <script> alert ('insertion failed') </script>";
}
}*/
?>