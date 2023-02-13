<?php
session_start();
echo "Hi ". $_SESSION["name"];
?>
<html>
<body>
    <form action="out.php">
        <br><br>
    <input type="submit" value="LOGOUT">
</form>
</body>
<html>