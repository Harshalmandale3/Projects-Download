<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
crossorigin="anonymous" referrerpolicy="no-referrer" />


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
        margin-top:5%;
    }
    .features{
        margin-top:5%;
    }

</style>



</head>

<body>

<!-- Header start  -->
<?php
include("header.php");
?>
<!-- Header end  -->


<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Admin Panel</h2>
						<div class="section_subtitle"><p>Admin/s can upload projects by clicking below on language of their respective projects.</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<a href="cuploadpro.php">
					<div class="feature text-center trans_400">
						<div class="feature_icon" ><img src="images/clang.png" alt="" style="max-width: 40%;"></div>
						<h3 class="feature_title" style="margin-top: 50px;">C </h3>
						<div class="feature_text"><p>Upload Here !</p></div>
					</div>
					</a>
				</div>

                <!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<a href="javauploadpro.php">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/java_original.png" alt="" style="max-width: 40%;" ></div>
						<h3 class="feature_title" style="margin-top: 50px;" >Java </h3>
						<div class="feature_text"><p>Upload Here !</p></div>
					</div>
					</a>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<a href="c++uploadpro.php">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/c++.png" alt="" style="max-width: 45%;"></div>
						<h3 class="feature_title" style="margin-top: 50px;">C++ </h3>
						<div class="feature_text"><p>Upload Here !</p></div>
					</div>
					</a>
				</div>

				

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<a href="pyuploadpro.php">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/Python.png" alt="" style="max-width: 40%;"></div>
						<h3 class="feature_title" style="margin-top: 50px;">Python </h3>
						<div class="feature_text"><p>Upload Here !</p></div>
					</div>
					</a>
				</div>

			</div>
		</div>
	</div>


<!-- Footer start  -->
<?php
include("footer.php");
?>
<!-- Footer end  -->





    
</body>
