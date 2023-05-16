<?php
session_start();

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>

    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="signup-style.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<style>

.dropdown_menu{
	display:none;
}

	.main_nav li:hover .dropdown_menu{
		display: block;
		position: absolute;
		left:0;
		top:100%;
		/* border:solid 1px black; */
		/* background-color:#14bdee; */
	}
	.main_nav li:hover .dropdown_menu ul{
		display: block;
		margin-top: 5px;
	}

	.main_nav li:hover .dropdown_menu ul li{
		width: 150px;
		/* padding-left:10px; */
	}

	.footer{
		margin-top:10%;
	}

</style>

</head>
<body>

<?php
	include("header.php");
	?>

    <div class="container_form">
        <div class="title">
          Registration Form
        </div>
      <div class="form">
            <?php
             if(isset($_SESSION['status']) && $_SESSION != '')
            {
            ?>
            

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
            </button>

            <?php
            unset($_SESSION['status']);
          }
            ?>
       


        </div>


  <form action="#" method="POST" enctype="multipart/form-data">
    
      
      
        <div class="form-group">
          <label for="first name">Full Name :</label>
          <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Full Name" name="fname" required> 
        </div>
        <div class="form-group">
          <label for="Email">Email Address :</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
          <label for="Last Name">Password :</label>
          <input type="Password" class="form-control" id="Password" placeholder="Password" name="pswd" required>
        </div>
        <div class="form-group">
          <label for="Last Name">Confirm Password :</label>
          <input type="Password" class="form-control" id="Password" placeholder="Confirm Password" name="cpswd" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>


  <!-- footer start  -->

<?php
include("footer.php");
?>


    
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pswd  = $_POST['pswd'];
    $cpswd = $_POST['cpswd'];

    $query="INSERT INTO prodownadmin(fname,email,password,cpassword) values('$fname','$email','$pswd','$cpswd')";

    $data = mysqli_query($con, $query);

    if($data){
        echo "<script>alert('Data inserted into database')</script>";
      }
      else{
        echo "Data not inserted";
      }
}

?>