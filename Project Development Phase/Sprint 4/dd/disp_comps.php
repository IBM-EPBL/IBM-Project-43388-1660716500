<?php
session_start();
include 'dbconn-comps.php';
 echo "<center>";
 echo "<font color=darkblue><h1><BR>THIS IS COMPUTER SCIENCE  CUTOFF LISTS<br><BR>";
 echo "<font color=darkblue> YOUR ENTERED DETAILS ARE:</h1> </font>";
 echo "<center><h2>HSC: " . $_SESSION['userhsc'];
 echo "<br><h2>JEE: " . $_SESSION['userjee'];
 echo "<font color= darkblue ><br><br><h2> YOU ARE ELIGIBLE TO APPLY FOR ADMISSIONS IN THE FOLLOWING INSTITUTES:<BR><BR> </font>";
 $sql = "SELECT * FROM comps_colleges";
 $result = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_assoc($result)){
   if($_SESSION['userhsc'] >= $row["hsc"] && $_SESSION['userjee'] >= $row["jee"] ){
   echo $row["ccname"];
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
 
