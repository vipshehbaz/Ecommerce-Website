<?php
include ('header.php');
?>

<style>
    .login {
        position: absolute;
        right: 10%;
    }

    .checkout {
        padding: 5px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .heading {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .w-50 {
        width: 50%;
    }

    .d-flex {
        display: flex;

    }

    .justify-content-between {
        justify-content: space-between;
    }

    .form {
        margin: 0px 70px;
    }

    .input {
        border-top: none;
        border-left: none;
        border-right: none;
        font-size: 1rem;
        border-bottom: 2px solid;
        outline: none;
        padding: 5px 10px;
        margin-top: 30px
    }

    .select {
        width: 50%;
        padding: 7px;
        height: 10%;
        margin-top: 30px;
        margin-left: 25px;
        border-top: none;
        border-right: none;
        border-left: none;
        background-color: white;
        border-bottom: 2px solid;
    }

    .bordered {
        border-radius: 10px;
    }

    input::placeholder {
        color: black;
        opacity: 1;
        font-weight: bolder;
    }

    .para {
        color: black;
        font-weight: 400;
        margin-top: 60px;
    }

    .btn {
        background-color: black;
        border: none;
        color: white;
        width: 150px;
        height: 50px;
        text-align: center;
        font-size: 1.2rem;
        margin-top: 20px;
    }

    .text-dark {
        color: black;
    }

    .shipping, .total {
        font-size: 1.1rem;
        font-weight: 500;
        margin-top: 20px;
        width: 120px;
    }

    .total{
    border-bottom: 2px solid;
    padding: 0px 2px;
    }

    table {
        background-color: #8d99ae;
        color: #2b2d42;
        width: 80%;
        margin-left:137px;
        text-align: center;
    }

    body {
        background-color: #2b2d42;
    }
    td img {

        object-fit: cover;
        width: 100%;
        height: auto;
    }

    .mid td {
        border: 1px solid black;
    }

    .table-head {
        background-color: #2b2d42;
        color: #8d99ae;
    }

    .fs-1 {
        font-size: 1.5rem;
    }

    .fs-2 {
        font-size: 1.3rem;
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



<h1 class="wraper text-dark heading">Checkout</h1>
<span class="d-flex">
    <div class="w-50">
        <table>
            <tr class="table-head">
                <td style="width:10%;">Sno</td>
                <td style="width:20%;">Product Name</td>
                <td style="width:20%;">Product Image</td>
                <td style="width:20%;">Price</td>
                <td style="width:10%;">Qty</td>
            </tr>
            <?php   
                    $items=array();
                    $sno = 1;
                    $gtotal = 50;

            foreach ($_SESSION['cart'] as $id => $value) {
                $query = "SELECT * FROM addpro WHERE id='$id'";
                $res = mysqli_query($con, $query) or die(mysqli_error($con));
                while ($row = mysqli_fetch_array($res))
                {
                $gtotal += $row['nprice'] * $value;
                $items[]="id=".$row['id'].$row['pname'].$value;

                    ?>
                    </table>
                    <table>
                    <tr class="mid">
                        <td class="fs-1" style="width:10%;"><?php echo $sno ++ ?></td>
                        <td class="fs-1" style="width:20%"><?php echo $row[2] ?></td>
                        <td class="fs-1" style="width:20%"><img src="admin/pimg/<?php echo $row[5] ?>" alt=""></td>
                        <td class="fs-1" style="width:20%"><?php echo number_format($row[4]) ?></td>
                        <td class="fs-1" style="width:10%">x<?php echo $value ?></td>
                    </tr>
                </table>

            <?php
                }
            }
            $allitems=implode(",",$items);   
            $query = "SELECT * FROM users";
            $res = mysqli_query($con, $query) or die(mysqli_error($con));
            $row = mysqli_fetch_array($res);
            ?>
    </div>
    <div class="w-50">
        
        <form class="wraper checkout" action="order.php" method="post">
            <input type="text" name="items" value="<?php echo $allitems ?>" id="" hidden>
            <input type="text" name="amount" value="<?php echo number_format($gtotal) ?>" id="" hidden>
            <input name="name" class="input" type="text" value="<?php echo $row[1] ?>">
            <span class="d-flex justify-content-between">
                <input name="email" class="input" type="text" value="<?php echo $row[2] ?>">
                <input name="phone" class="input" type="text" value="<?php echo $row[3] ?>">
            </span>
            <input name="address" class="input" type="text" value="<?php echo $row[4] ?>" placeholder="Address">
            <span class="d-flex justify-content-between">
                <input name="city" class="input" type="text" value="<?php echo $row[5] ?>" placeholder="City">
                <input name="postal_code" class="input" type="text" value="<?php echo $row[6] ?>" placeholder="Postal Code">
            </span>
            <span class="d-flex justify-content-between">
                <input name="state_province" class="input" type="text" value="<?php echo $row[7] ?>" placeholder="State Province">
                <select class="select">
                    <option value="Pakistan"><?php echo $row[8] ?></option>
                </select>
            </span>
            <p class="para">I have read and understand the Privacy Policy</p>
            <span class="d-flex justify-content-between">
                <input class="btn" type="submit" name="btn" value="Place Order">
                <p class="shipping">Shipping
                   Fee 
                   <span class="fs-2">
                   Rs : 50
                   </span>
                </p>
                <p class="total">Total Price
                    <span class="fs-2">
                    Rs : <?php echo number_format($gtotal) ?>
                    </span>
                </p>
            </span>
        </form>
    </div>
</span>

<?php
include("footer.php");
?>