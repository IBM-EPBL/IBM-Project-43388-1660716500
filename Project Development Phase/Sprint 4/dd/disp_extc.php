<?php
session_start();
include 'dbconn-extc.php';
echo "<center>";
echo "<font color=darkblue><h1><BR>THIS IS ELECTRONICS AND TELECOMMUNICATION CUTOFF LISTS<br>";
 echo "<br><h1>Your Entered Details Are: ";
 echo "<br><h2>HSC: " . $_SESSION['userhsc'];
 echo "<br><h2>JEE: " . $_SESSION['userjee'];
 echo "<br><br><h1> YOU ARE ELIGIBLE TO APPLY FOR ADMISSIONS IN THE FOLLOWING INSTITUTES:<BR><BR> ";
 $sql = "SELECT * FROM extc_colleges";
 $result = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_assoc($result)){
   if($_SESSION['userhsc'] >= $row["hsc"] && $_SESSION['userjee'] >= $row["jee"] ){
   echo $row["ecname"];
   echo "<br>HSC: " . $row["hsc"] . "    JEE: " . $row["jee"] . "<br><br>";
 }
 }
 ?>
<html>
<head>
<style type="text/css">

body {
background-image: url('img/ggif.gif');
background-size: 1800px;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hey</title>
</head>
<body>
</body>
</html>
