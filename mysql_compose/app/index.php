<?php
    $con=mysqli_connect("localhost","root","redhat");
    mysqli_select_db($con,"login");
    if(isset($_REQUEST["btn_submit"]))
    {
               $name=$_REQUEST["txt_email"]
               $password=$_REQUEST["txt_password"]
               $qry="INSERT into tbl_login(Name,Password) values('$name','$password')";
               mysqli_query($con,$qry);
    }
?>
<!DOCTYPE html>
<html>
<head>
        <title>devops</title>
</head>
<body>
  <form method="post">
        <input type="text" name="txt_email" value="enter name">
        <input type="password" name="txt_password" value="enter password">
        <input type="submit" name="btn_submit" value="submit">
  </form>
</body>
</html>
