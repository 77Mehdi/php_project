<?php 
if(isset($_POST['Logen_btn'])){
	$emal=$_POST['email'];
	$pswd=$_POST['pswd'];

	$servsnamee="localhost";
    $usrename="root";
    $passwordd="";
    $datpass="myobgect";

	$conect= mysqli_connect($servsnamee, $usrename,$passwordd,$datpass);
    $query = "INSERT INTO login(Email,password) ";
    $query .= " VALUES('$emal','$pswd' ) ";
    $chik= mysqli_query($conect, $query);


	// validation  email  &  password
	$V_email= filter_var($emal,FILTER_VALIDATE_EMAIL);
	$pasword=strlen($pswd);

	if($V_email){
		echo "valid emal : " .$emal."<br>";
	
	}else{
		echo 'not valid email ! :' .$emal."<br>";
	}
	if($pasword>8 && $pasword<15 ){
		
		echo "valid password : " .$pswd."<br>";
		
	}else{
		echo 'not valid password ! :' .$pswd."<br>";
	}


	

}




?>




<!DOCTYPE html>
<html>
<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="./icon/all.min.css">
    <link rel="stylesheet" href="./icon/bootstrap-icons.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<style>
	<?php  include 'D:\W-3-Schools\php--\php-ool\htdocs\progge\css\style_logen.css'?>
</style>
 
<body>
	<!-- Navbar Start -->
	<?php  include 'D:\W-3-Schools\php--\php-ool\htdocs\progge\nav.php'  ?> 
    <!-- Navbar End -->
	<div class="all">
<section class="all_login">

		
			<div class="login">
				<form action="./php/login.php" method="post" >
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="password" name="Password1" placeholder="Password" required="">
					<button name="Logen_btn">Login</button>
				</form>
			</div>
   
		
	</section>
	</div>
	 <!-- Footer Start -->
	 <?php   include 'D:\W-3-Schools\php--\php-ool\htdocs\progge\Footer.php'?> 
    <!-- Footer End -->


	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  
</body>
</html>
