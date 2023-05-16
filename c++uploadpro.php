<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++ project upload</title>

    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">


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
	.container-file{
		Margin-top:10%;
		/* border:dashed 1px black; */
		margin-left:10%;
		margin-right:10%;
		border-radius:8px;
		/* padding-right:25px; */
		padding:20px 20px;
		background-color:rgb(201, 225, 246);
		
	}
	form{
		font-size:20px;
		/* border:solid 1px black; */
	}
	input{
		/* margin-left:40%; */
		align:center;
		padding:0 10px;
	}
	h3{
		margin-top:240px;
		text-align:center;
		font-size:30px;
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



		<?php
    error_reporting(0);
	include("connection.php");
    ?>
		<div class="container-file">

		<h1 class="text-center"><b>Upload Your C++ Project</b></h1>
		<div class="col-lg-8 m-auto">
			<form action="" method="post" enctype="multipart/form-data" style="padding-top:15px;">
				<div class="form-group">
         	 		<label for="Project Name:"><strong>Project Name :</strong></label>
          			<input type="text" class="form-control" id="projectname" aria-describedby="emailHelp" placeholder="Project Name" name="pname" required> 
        		</div>
				<div class="form-group">
         	 		<label for="Project Discription:"><strong>Project Discription :</strong></label>
          			<input type="text" class="form-control" id="projectdiscription" aria-describedby="emailHelp" placeholder="Project Discription" name="pdiscription" required> 
        		</div>
				<div class="form-group">
					<label ><strong>Upload File Here :</strong></label>
					<input type="file" name="uploadfile" id="files" multiple dirctory="" mozdirectory="" class="form-control">
				</div>
				<input type="submit" name="submits" value="Upload" class="btn btn-success ml-3">
			</form>
		</div>

		</div>
		
    

<?php

if(isset($_POST['submits']))
{
	$pname=$_POST['pname'];
	$pdiscription=$_POST['pdiscription'];

	$filename = $_FILES['uploadfile']['name'];

    $temp_name = $_FILES['uploadfile']['tmp_name'];

    $folder = "uploads/".$filename;

	move_uploaded_file($temp_name,$folder);

	$query = "INSERT INTO cppproject(projectname,projectdiscription,cpproject) values('$pname','$pdiscription','$folder')";
	$query_run = mysqli_query($con, $query);
	
	if($query_run)
	{
	//    move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "upload/".$_FILES["uploadfile"]["name"]);
		echo "<script>alert('File Stored Successfully')</script>";
	}  
	else
	{
		echo "<script>alert('File not inserted')</script>";
		
	 
	}

}


?>


<!-- footer start  -->

<?php
	include("footer.php");
	?>

</body>
</html>





