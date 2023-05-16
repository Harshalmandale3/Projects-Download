<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Projects</title>

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


    .team-section{
        margin-top:250px;
    }

     .container .section-title{
        margin-bottom:30px;
    }

    .team-member{
        border:solid 1px black;
        border-radius:7px;
    }

    .contents{
        padding-top:20px;
        padding-bottom:30px;
    }
    h4{
        font-size:20px;
    }

    p{
        font-size:18px;
        padding-top:15px;
    }
    h3{
        font-size:30px;
        padding-bottom:30px;
    }
    .contents a{
        padding-top:30px;
    }
    .container-file{
		Margin-top:10%;
		/* border:dashed 1px black; */
		/* margin-left:10%;
		margin-right:10%;
		border-radius:8px; */
		padding-right:220px;
		padding-left:220px;
        border-radius:100px;
    
        /* padding-top:30px  */

		/* background-color:rgb(201, 225, 246); */
		
	}
   
    th{
        padding : 10px;
        text-align:center;
        font-size:20px;
        color: white;
        background-color: #1293a0;
    }
    td{
        padding : 10px;
        text-align:center;
        font-size:18px;
    }
    .footer{
        margin-top:10%;
    }
    tr{
        background-color: ;
        color: #5c6566;
    }
    
    tr:nth-child(even){
        background-color:#f0efe6;
        color:#5c6566;
    }

    tr:hover{
        background-color:#78aeb0 ;
        color:white;
    }



</style>

</head>
<body>

<?php
	include("header.php");
	?>


        <div class ="container-file" >
    <div class="row">
        <?php

        include("connection.php");
       // include("download.php");

        $query= "SELECT * FROM jvproject";
        $query_run=mysqli_query($con,$query);
        $total = mysqli_num_rows($query_run);

        if($total!=0)
        {
            ?>
            
            <h2 class="text-center container" style="padding-bottom:30px;">Java projects</h2>
            <table class="table"  width="100%">
            <thead>
            <tr>
            <th  width ="5%">ID</th>
            <th  width ="10%">Project Name</th>
            <th  width ="20%">Project Discription</th>
            <th  width ="10%">Project File</th>
            </tr>
            </thead>
            <?php
   

        while($row=mysqli_fetch_assoc($query_run))
        {
           
            echo " 
            <tr>
            <td>".$row['id']."</td>
            <td>".$row['projectname']."</td>
            <td>".$row['projectdiscription']."</td>
            <td><a href='$row[jproject]' class='btn btn-info'>Download</a></td>
            </tr>
             ";
             
        }
    }
    
        ?>
        </table>
 </center>
    </div>

</div>
 
<!-- footer start  -->
<?php
	include("footer.php");
	?> 
       
    
</body>
</html>