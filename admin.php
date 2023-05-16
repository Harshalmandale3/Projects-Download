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
    <title>Admin Login</title>

    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="admin-style.css">


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
        margin-top:50%;
    }

</style>


</head>
<body>
    
<?php
	include("header.php");
	?>

        
    <div class="center">
        <h1>login</h1>
        <form action="#" method="POST">
        <div class ="form">   
            <input type="text" name="username" class="textfield" placeholder="Username">
            <input type="password" name="password" class="textfield" placeholder="Password">

            <input type="submit" name="login" value="Login" class="btn">

            <div class="signup">New Member? <a href="signup.php" class="link">Sign Up</a></div>

        </div>
    </div>
    </form>


    <?php

        if(isset($_POST['login']))
        {
            $username = $_POST['username'];
            $pwd = $_POST['password'];

            $query = "SELECT * FROM prodownadmin WHERE email = '$username' && password ='$pwd' ";

            $data = mysqli_query($con, $query);

            $total = mysqli_num_rows($data);

            if($total == 1)
            {
                $_SESSION['user-name'] = $username;
                
                ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost/projectdownload/admin-dashboard.php" />
              <?php
            }
            else
            {
            ?>
            echo
            <script>alert('Enter Correct Email Id Password!')</script>;
            <?php
            }
        }

     ?>

    <!-- footer start  -->
    <?php
	include("footer.php");
	?>
    <!-- footer end  -->

</body>
</html>