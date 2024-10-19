<?php

include("conf.php");

if(isset($_GET['pid'])){
    $pid=$_GET['pid'];

    $query="delete from addpro where id='$pid'";
    $dis=mysqli_query($con, $query) or die (mysqli_error($con));

    if($dis){
        echo"<script>alert('Product Deleted')
        document.location='pview.php'</script>";
    }else{
        echo"Sorry Bhai";
    }
}