<?php
include ("header.php");

if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
    $action = $_GET['action'];

    switch ($action) {
        case 'add':
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]++;
            } else {
                $_SESSION['cart'][$id] = 1;
            }
            break;
        case 'remove':
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]--;
            }
            if ($_SESSION['cart'][$id] == 0) {
                unset($_SESSION['cart'][$id]);
            }
            break;
        case 'clear':
            unset($_SESSION['cart']);
            header("location:index.php");
            break;
    }
}

?>

<style>
    .footer{
        color: #2b2d42;
        display: flex;
        justify-content: center;
    }
   

    .fs-1 {
        font-size: 1.5rem;
    }
    .bottom td {
        margin: 0;
        padding: 10px;
        border-top: 1px solid;
    }
    .padding{
        padding: 10px;
        background-color: #8d99ae;
    }
    table{
        border: 1px solid #2b2d42;
    }

    body{
        background-color: #2b2d42;
    }

    td img{
        object-fit: fill;
        width: 150px;
    }

    .mid td{
        border: 1px solid black;
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
        </ul>
    </div>
</div>
<div class="padding">
    <table style="background-color:#8d99ae; color:#2b2d42; width:100%; text-align:center;">
        <tr style="background-color:#2b2d42; color:#8d99ae;">
            <td style="width:3%;">Sno</td>
            <td>Name</td>
            <td style="width:10%;">Image</td>
            <td>Price</td>
            <td>Qty</td>
            <td>Sub Total</td>

        </tr>

        <?php
        $sno = 1;
        $gtotal = 0;

        foreach ($_SESSION['cart'] as $id => $value) {
            $query = "SELECT * FROM addpro WHERE id='$id'";
            $res = mysqli_query($con, $query) or die(mysqli_error($con));
            $row = mysqli_fetch_array($res);

            $gtotal += $row['nprice'] * $value;


            ?>
            <tr class="mid">
                <td class="fs-1"><?php echo $sno++ ?></td>
                <td class="fs-1"><?php echo $row['pname'] ?></td>
                <td><img src="admin/pimg/<?php echo $row['pimg'] ?>" width="" alt=""></td>
                <td class="fs-1"><?php
                $price = $row['nprice'];
                $numfor = number_format($price);
                echo $numfor;
                ?></td>
                <td> <span style="border:1px solid; padding:24px 0px 13px 0px; border-radius:10px;">
                        <a style="text-decoration:none; font-size:2rem; background-color:#2b2d42; color:#8d99ae; padding:10px; border-radius:10px 0px 0px 10px;"
                            href="cart.php?pid=<?php echo $row[0] ?>&action=add">+</a>
                        <span style="font-size:2rem;"><?php echo $value ?></span>
                        <a style="text-decoration:none; font-size:2rem; border-radius:0px 10px 10px 0px; background-color:#2b2d42; color:#8d99ae; padding:10px 15px;"
                            href="cart.php?pid=<?php echo $row[0] ?>&action=remove">-</a>
                    </span>
                </td>
                <td class="fs-1"><?php
                $subprice = $row['nprice'] * $value;
                $numformat = number_format($subprice);
                echo $numformat;
            }
                ?></td>
            </tr>
            <tr class="bottom">
                <td></td>
                <td style="width:20%;"><a href="index.php"
                        style="background-color:#2b2d42; color:#8d99ae; text-decoration:none; padding:5px; border-radius:5px;" class="fs-1">Continue
                        Shopping</a>
                </td>
                <td></td>
                <td><a href="checkout.php"
                        style="background-color:#2b2d42; color:#8d99ae; text-decoration:none; padding:5px; border-radius:5px;" class="fs-1">Check out</a></td>
                        <td><a href="cart.php?pid=<?php echo $row[0] ?>&action=clear"
                        style="background-color:#2b2d42; color:#8d99ae; text-decoration:none; padding:5px; border-radius:5px;" class="fs-1">Clear</a>
                </td>
                <td><a href="" class="fs-1"
                        style="background-color:#2b2d42; color:#8d99ae; text-decoration:none; padding:5px; border-radius:5px;"><?php $numberformat = number_format($gtotal);
                        echo $numberformat;
         ?></a>
                </td>
        </tr>
    </table>
</div>

<?php



include ("footer.php");