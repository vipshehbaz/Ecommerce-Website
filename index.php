<?php
include("header.php");
?>


<style>
    .login{
        position: absolute;
        right:10%;
}
</style>
        <div class="nav">
            <div class="wraper">
                <ul>
                    <li class="hvr-underline-from-left"><a href="index.php">home</a></li>
                    <li class="hvr-underline-from-left"><a href="">shop</a></li>
                    <li class="hvr-underline-from-left"><a href="admin/index.php">admin</a></li>
                    <li class="hvr-underline-from-left"><a href="">contact</a></li>
                    <li class="hvr-underline-from-left"><a href="">about us</a></li>
                    <span class="login">
                    <li class="hvr-underline-from-left"><a href="users/login.php">Login</a></li>
                    <li class="hvr-underline-from-left"><a href="users/signup.php">Sign Up</a></li>
</span>
                </ul>
            </div>
        </div>
        <div class="slider">
            <img src="assets/images/slider.jpg" alt="" height="100%" width="100%">
        </div>
        <div class="phead">
            <div class="wraper">
                <h2>BATA</h2>
            </div>
        </div>
        <div class="section">
            <div class="wraper">

                <?php
                $query = "SELECT * FROM addpro WHERE catagories='bata'";
                $result = mysqli_query($con, $query) or die (mysqli_error($con));
                while ($row = mysqli_fetch_array($result)) {
                ?>

                <div class="box">
                    <div class="boximg">
                        <img src="admin/pimg/<?php echo $row["pimg"] ?>" alt="">
                    </div>
                    <h3><?php echo $row["pname"] ?></h3>
                    <h3><del>PKR:<?php $oprice = $row["oprice"]; 
             echo number_format($oprice); ?></del> PKR: <?php $nprice = $row["nprice"]; 
             echo number_format($nprice); ?></h3>
                    <a href="cart.php?pid=<?php echo $row[0]?>&action=add">add to chart</a>
                    <a href="admin/detail.php?pid=<?php echo"$row[0]"?>">detail</a>

                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="phead">
            <div class="wraper">
                <h2>NIKE</h2>
            </div>
        </div>
        <div class="section">
            <div class="wraper">

                <?php
                $query = "SELECT * FROM addpro WHERE catagories='Nike'";
                $result = mysqli_query($con, $query) or die (mysqli_error($con));
                while ($row = mysqli_fetch_array($result)) {
                ?>

                <div class="box">
                    <div class="boximg">
                        <img src="admin/pimg/<?php echo $row["pimg"] ?>" alt="">
                    </div>
                    <h3><?php echo $row["pname"] ?></h3>
                    <h3><del>PKR:<?php $oprice = $row["oprice"]; 
             echo number_format($oprice); ?></del> PKR: <?php $nprice = $row["nprice"]; 
             echo number_format($nprice); ?></h3>
                    <a href="cart.php?pid=<?php echo $row[0]?>&action=add">add to chart</a>
                    <a href="admin/detail.php?pid=<?php echo"$row[0]"?>">detail</a>

                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="phead">
            <div class="wraper">
                <h2>JORDEN</h2>
            </div>
        </div>
        <div class="section">
            <div class="wraper">

                <?php
                $query = "SELECT * FROM addpro WHERE catagories='Jordan'";
                $result = mysqli_query($con, $query) or die (mysqli_error($con));
                while ($row = mysqli_fetch_array($result)) {
                ?>

                <div class="box">
                    <div class="boximg">
                        <img src="admin/pimg/<?php echo $row["pimg"] ?>" alt="">
                    </div>
                    <h3><?php echo $row["pname"] ?></h3>
                    <h3><del>PKR:<?php $oprice = $row["oprice"]; 
             echo number_format($oprice); ?></del> PKR: <?php $nprice = $row["nprice"]; 
             echo number_format($nprice); ?></h3>
                    <a href="cart.php?pid=<?php echo $row[0]?>&action=add">add to chart</a>
                    <a href="admin/detail.php?pid=<?php echo"$row[0]"?>">detail</a>

                </div>
                <?php
                }
                include("footer.php");
                ?>