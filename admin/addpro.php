<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ("conf.php");

if (isset($_POST["btn"])) {
    $cat = $_POST["cat"];
    $pname = $_POST["pname"];
    $oprice = $_POST["oprice"];
    $nprice = $_POST["nprice"];
    $pdiscrip = $_POST["discription"];
    $pimg = $_FILES["img"]["name"];
    $pimg_tmp = $_FILES["img"]["tmp_name"];
    move_uploaded_file($pimg_tmp, "pimg/$pimg");

    $query="INSERT INTO addpro (id, catagories, pname, oprice, nprice, pimg, pdiscription, created_at) VALUES (NULL, '$cat', '$pname', '$oprice', '$nprice', '$pimg', '$pdiscrip', NOW())";

    $result=mysqli_query($con,$query) or die (mysqli_error($con));

  
    if ($result) {
        echo "<script>
                alert('product added')
                document.location = 'home.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('product not added')
              </script>";
    }
}