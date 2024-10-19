<?php
include("conf.php");

if(isset($_GET['pid'])){
    $pid=$_GET['pid'];

    $query = "SELECT * FROM addpro WHERE id='$pid'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($res);

    if (isset($_POST["btn"])) {
        $cat = $_POST["cat"];
        $pname = $_POST["pname"];
        $oprice = $_POST["oprice"];
        $nprice = $_POST["nprice"];
        $pdiscrip = $_POST["discription"];
        $pimg = $_FILES["img"]["name"];
        $pimg_tmp = $_FILES["img"]["tmp_name"];
        move_uploaded_file($pimg_tmp, "pimg/$pimg");
    
        $query1="UPDATE addpro SET catagories='$cat', pname='$pname', oprice='$oprice', nprice='$nprice', pimg='$pimg',  pdiscription='$pdiscrip' WHERE id='$pid'";
    
        $result=mysqli_query($con,$query1) or die (mysqli_error($con));
    
      
        if ($result) {
            echo "<script>
                    alert('Product Updated')
                  </script>";
                  header("location:pview.php");
        } else {
            echo "<script>
                    alert('product not Updated')
                  </script>";
        }
    }
}  
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Dashboard Made By Shehbaz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        .hover:hover {
            font-size: 20px;
            transition-duration: 0.1s;
            transition-timing-function: ease-in;
            transition-property: all;
        }
    </style>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div>
            
            <section class="">
                <form method="post" enctype="multipart/form-data">

                <?php   ?>
                    <div class="container-fluid pt-4 px-4">

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center mb-4">Add New Product</h2>
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Categories</label>
                                <select class="form-control" placeholder="Category" name="cat" value="<?php echo"$row[1]"; ?>">
                                    <!-- <Option value="Categor"></Option> -->
                                    <option value="Nike">Nike </option>
                                    <option value="Bata">Bata</option>
                                    <option value="Jordan">Jordan</option>
                                </select>
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Product Name</label>
                                <input type="text" class="form-control" placeholder="Product name"
                                    aria-label="First name" value="<?php echo"$row[2]"; ?>" required name="pname">
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Old Price</label>
                                <input type="number" class="form-control" value="<?php echo"$row[3]"; ?>" placeholder="Old Price" aria-label="Last name"
                                    required name="oprice">
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">New Price</label>
                                <input type="number" class="form-control" placeholder="New Price" value="<?php echo"$row[4]"; ?>" aria-label="Last name"
                                    required name="nprice">
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Product Image</label>
                                <input type="file" class="form-control" aria-label="Last name" required name="img">
                            </div>
                            <div class="col-md-12 my-2">
                                    <label for="">Discription</label>
                                    <input type="text" class="form-control" aria-label="Discription" value="<?php echo"$row[6]"; ?>" required
                                        name="discription">
                            </div>
                            <div class="col-md-12 my-2">
                                <input type="Submit" class="form-control bg-dark text-light" aria-label="Last name"
                                    value="Update Product" name="btn">
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="https://shehbazdegoraclone.netlify.app/" target="_black">Degora Clone</a>,
                            All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#">M.Shehbaz Khan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
</body>

</html>