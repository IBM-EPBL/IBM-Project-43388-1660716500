<?php
session_start();
include 'dbconn-mech.php';
echo "<center>";
 echo "<font color=darkblue><h1><BR>THIS IS MECHANICAL CUTOFF LISTS<br>";
 echo "<br><br>Your Entered Details Are: ";
 echo "<br>HSC: " . $_SESSION['userhsc'];
 echo "<br>JEE: " . $_SESSION['userjee'];
 echo "<br><br> YOU ARE ELIGIBLE TO APPLY FOR ADMISSIONS IN THE FOLLOWING INSTITUTES:<BR><BR> ";
 $sql = "SELECT * FROM mech_colleges";
 $result = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_assoc($result)){
   if($_SESSION['userhsc'] >= $row["hsc"] && $_SESSION['userjee'] >= $row["jee"] ){
   echo $row["mcname"];
   echo "<br>HSC: " . $row["hsc"] . "    JEE: " . $row["jee"] . "<br><br>";
 }
 }
 ?>
 <html>
<head>
<style type="text/css">

body {
background-image: url('img/ggif.gif');
background-size: 1800PX;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hey</title>
</head>
<body>
</body>
</html>
