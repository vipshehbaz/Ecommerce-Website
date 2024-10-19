<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('conf.php');

if (isset($_POST['btn'])) {
    $nm = $_POST['nm'];
    $em = $_POST['em'];
    $ps = $_POST['ps'];
    $cps = $_POST['cps'];
    $img = $_FILES['img']['name'];

    // $_FILES Global Variable Array List 
    $filename = $_FILES['img']['name'];
    $filetmp = $_FILES['img']['tmp_name'];

    move_uploaded_file($filetmp, "userimg/$filename");

    $checkemail = "SELECT * FROM registration WHERE email='$em'";
    $check = mysqli_query($con, $checkemail);
    $count = mysqli_num_rows($check);

    if ($count > 0) {
        echo "<script>
                alert('Email Is Already Taken')
              </script>";
    } else {
        if ($ps == $cps) {
            // Hash the password for security
            $hashed_password = password_hash($ps, PASSWORD_DEFAULT);

            // Use a prepared statement to insert data
            $stmt = $con->prepare("INSERT INTO registration (name, email, password, cpassword, img, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
            $stmt->bind_param("sssss", $nm, $em, $hashed_password, $cps, $img);

            if ($stmt->execute()) {
                echo "<script>
                        alert('Welcome User')
                      </script>";
                header("Location: index.php");
                exit();
            } else {
                echo "<script>
                        alert('Invalid User')
                      </script>";
            }

            $stmt->close();
        } else {
            echo "<script>
                    alert('Your Password & Confirm Password Are Not Same')
                  </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css" rel="stylesheet" />
  <style>
    .gradient-custom-3 {
      background: #84fab0;
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
      background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
    }
    .gradient-custom-4 {
      background: #84fab0;
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
      background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
    }
  </style>
</head>
<body>
  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <form method="post" enctype="multipart/form-data">
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg border" name="nm" />
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg border" name="em" />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg border" name="ps" />
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg border" name="cps" />
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="file" id="form3Example4cdg" class="form-control form-control-lg border" name="img" />
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="submit" name="btn" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" />
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php" class="fw-bold text-body"><u>Login here</u></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
