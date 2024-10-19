<?php
include ("../header.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET["pid"])) {
    $pid = $_GET["pid"];
    
    $query = "SELECT * FROM addpro WHERE id='$pid'";
    $result = mysqli_query($con, $query) or die (mysqli_error($con));
    $row = mysqli_fetch_array($result);
    }
?>
    <div class="nav">
        <div class="wraper">
            <ul>
                <li class="hvr-underline-from-left"><a href="../index.php">home</a></li>
                <li class="hvr-underline-from-left"><a href="">shop</a></li>
                <li class="hvr-underline-from-left"><a href="admin/index.php">admin</a></li>
                <li class="hvr-underline-from-left"><a href="">contact</a></li>
                <li class="hvr-underline-from-left"><a href="">about us</a></li>
            </ul>
        </div>
    </div>
    <div class="container" style="display:flex;">
        <div style="width: 50%;">
            <img style="object-fit:cover; object-position:0% 80%;" src="pimg/<?php echo $row["pimg"] ?>" alt="" height="100%" width="100%">
        </div>
        <div style="margin:10px; width:50%;">
            <h1 style="padding:10px;"><?php echo $row["pname"] ?></h1>
            <p style="padding:5px 10px 10px 10px;"><?php echo $row["pdiscription"] ?></p>
            <div style="display:flex; ">
            <p style="padding:5px 10px 10px 10px; font-size:2rem; color:maroon;"><del>PKR:<?php
             $oprice = $row["oprice"]; 
             echo number_format($oprice);
             ?></del></p>
            <p style="padding:5px 10px 10px 10px; font-size:2rem;">PKR:<?php $nprice = $row["nprice"]; 
             echo number_format($nprice);?></p>
            </div>
        </div>
    </div>
    
    
    <?php
include ("../footer.php");
?>