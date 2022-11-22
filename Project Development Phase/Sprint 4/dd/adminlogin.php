<?php
include 'dbconn-dd.php';
$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

$sql = "SELECT * FROM admins WHERE admin_username='$username' AND admin_password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
die('Invalid Username or Password!<br><br>');
#echo "Invalid Username or Password!<br>";
}

else{
  echo"<br><br><br><br><h1><font color= darkblue>LOGGED IN WITH ADMIN PRIVILEGES!";
}
?>

<html>
  <style type="text/css">

    body {
    background-image: url('img/bkk2.jpg');
    background-size: 1px;
    }
    </style>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hey</title>

<body align= "center">
  <br><br><br>
  Add College Details<br>
  Choose a Stream:<br><br>
<a href="addcomps.html">Computers<br><br></a>
<a href="addit.html">Information Technology<br><br></a>
<a href="addextc.html">Electronics and Telecommunication<br><br></a>
<a href="addmech.html">Mechanical<br><br></a>
</body>
</html>
