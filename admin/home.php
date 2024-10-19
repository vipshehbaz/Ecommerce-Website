<?php
include ('conf.php');
$img = $_SESSION["img"];
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
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHBOARD</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="userimg/<?php echo $img ?>" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION["username"]; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="home.php" class="nav-item hover nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Upload</a>
                </div>
                <div class="navbar-nav my-2 w-100">
                    <a href="pview.php" class="nav-item hover nav-link"><i class="fa fa-eye me-2"></i>View</a>
                </div>
                <div class="navbar-nav my-2 w-100">
                    <a href="vieworder.php" class="nav-item hover nav-link"><i class="fa fa-box me-2"></i>Orders</a>
                </div>
            </nav>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="userimg/<?php echo $img ?>" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["username"]; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <section>
                <form action="addpro.php" method="post" enctype="multipart/form-data">
                    <div class="container-fluid pt-4 px-4">

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center mb-4">Add New Product</h2>
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Categories</label>
                                <select class="form-control" placeholder="Category" name="cat">
                                    <!-- <Option value="Categor"></Option> -->
                                    <option value="Nike">Nike </option>
                                    <option value="Bata">Bata</option>
                                    <option value="Jordan">Jordan</option>
                                </select>
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Product Name</label>
                                <input type="text" class="form-control" placeholder="Product name"
                                    aria-label="First name" required name="pname">
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Old Price</label>
                                <input type="number" class="form-control" placeholder="Old Price" aria-label="Last name"
                                    required name="oprice">
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">New Price</label>
                                <input type="number" class="form-control" placeholder="New Price" aria-label="Last name"
                                    required name="nprice">
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="">Product Image</label>
                                <input type="file" class="form-control" aria-label="Last name" required name="img">
                            </div>
                            <div class="col-md-12 my-2">
                                <div class="input-group">
                                    <span class="input-group-text">Discription</span>
                                    <textarea class="form-control" aria-label="Discription" required
                                        name="discription"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 my-2">
                                <input type="Submit" class="form-control bg-dark text-light" aria-label="Last name"
                                    value="Add Product" name="btn">
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="../index.php">Shoes Shop</a>,
                            All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="https://htmlcodex.com">M.Shehbaz Khan</a>
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