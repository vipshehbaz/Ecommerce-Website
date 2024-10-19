<?php
include ("conf.php");
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
                    <a href="home.php" class="nav-item hover nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Upload</a>
                </div>
                <div class="navbar-nav my-2 w-100">
                    <a href="pview.php" class="nav-item hover nav-link active"><i class="fa fa-eye me-2"></i>View</a>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Catagories</th>
                            <th scope="col">PName</th>
                            <th scope="col">OPrice</th>
                            <th scope="col">NPrice</th>
                            <th scope="col">PImage</th>
                            <th scope="col">Discription</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
            $query = "SELECT * FROM addpro";
            $query = mysqli_query($con, $query) or die(mysqli_error($con));
            while ($row = mysqli_fetch_array($query)) {
                ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["catagories"] ?></td>
                            <td><?php echo $row["pname"] ?></td>
                            <td><?php echo $row["oprice"] ?></td>
                            <td><?php echo $row["nprice"] ?></td>
                            <td><img class="m-0 p-0 rounded" src="pimg/<?php echo $row["pimg"] ?>" height="30px"></td>
                            <td><?php echo $row["pdiscription"] ?></td>
                            <td><?php echo $row["created_at"] ?></td>
                            <td><a href="del.php?pid=<?php echo"$row[0]"; ?>">Del</a>
                            /
                        <a href="edit.php?pid=<?php echo"$row[0]"; ?>">Edit</a>
                        </td>
                        </tr>
                <?php
            }
            ?>
                    </tbody>
                </table>

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
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
</body>

</html>