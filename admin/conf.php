<?php

session_start();
$host="localhost";
$uname="root";
$ps="";
$db="database";

  $con=mysqli_connect($host, $uname, $ps, $db) or die (mysqli_error($con));
