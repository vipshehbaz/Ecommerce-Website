<?php
include ('admin/conf.php');
?>
<?php 
        if(isset($_POST['btn'])){
            $items=$_POST['items'];
            $amount=$_POST['amount'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $postal_code=$_POST['postal_code'];
            $state_province=$_POST['state_province'];
            $country='Pakistan';

            $query="INSERT INTO order_manager VALUES (NULL, '$items', '$amount', '$name','$email','$phone','$address','$city','$postal_code','$state_province','$country', NOW())";

            $upload=mysqli_query($con, $query) or die (mysqli_error($con));

            if($upload){
                echo "<script>
                alert('Order placed');
                window.location.href='index.php';
            </script>";
               }else{
                echo "<script>
                alert('Your order not placed');
            </script>";
               }

            }           