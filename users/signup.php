<?php
include("../admin/conf.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['btn'])) {
    $nm = $_POST['nm'];
    $em = $_POST['em'];
    $phone = $_POST['pn'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $state_province = $_POST['state_province'];
    $country = $_POST['country'];
    $ps = $_POST['ps'];
    $cps = $_POST['cps'];


    $checkemail = "SELECT * FROM users WHERE email='$em'";
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
            $stmt = $con->prepare("INSERT INTO users (name, email, phone, address, city, postalcode, state_province, country, password, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
            $stmt->bind_param("sssssssss", $nm, $em, $phone, $address, $city, $postalcode, $state_province, $country, $hashed_password);

            if ($stmt->execute()) {
                echo "<script>
                        alert('Welcome User');
                        document.location = 'login.php';
                      </script>";
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
                <form method="post">
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg border" name="nm" />
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg border" name="em" />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="number" id="form3Example3cg" class="form-control form-control-lg border" name="pn" />
                    <label class="form-label" for="form3Example3cg">Your Phone Number</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg border" name="address" />
                    <label class="form-label" for="form3Example3cg">Your Address</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="texy" id="form3Example3cg" class="form-control form-control-lg border" name="city" />
                    <label class="form-label" for="form3Example3cg">Your City</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="number" id="form3Example3cg" class="form-control form-control-lg border" name="postalcode" />
                    <label class="form-label" for="form3Example3cg">Your Postalcode</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg border" name="state_province" />
                    <label class="form-label" for="form3Example3cg">Your State Province</label>
                  </div>
                  <div class="form-outline mb-4">
                    <select class="form-select" name="country">
                        <option value="Pakistan">Pakistan</option>
                    </select>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg border" name="ps" />
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg border" name="cps" />
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="submit" name="btn" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" />
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
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


