

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>nav</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
          <!-- Icon Font Stylesheet -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="./icon/all.min.css">
    <link rel="stylesheet" href="./icon/bootstrap-icons.css">

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    </head>
<body>
<style>
	<?php  include 'D:\W-3-Schools\php--\php-ool\htdocs\progge\css\style_logen.css'?>
</style>


    <!-- Navbar Start -->
    <?php include 'D:\W-3-Schools\php--\php-ool\htdocs\progge\nav.php'  ?>
    <!-- Navbar End -->


        <section class="all">
	<div class="main_log">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			
       <div class="signup">
				<form action="./php/login.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="Forst_name" placeholder="Forst_name" required="" id="Forst_name">
					<input type="text" name="Last_name" placeholder="Last_name" required="" id="Last_name">
					<input type="email" name="Email" placeholder="Email" required="" id="Email">
					<input type="password" name="Password1" placeholder="Password" required="" id="Password1">
					<input type="password" name="Password2" placeholder="Password" required=""id="Password2">
					<button name="S_up_btn">Sign up</button>
				</form>
                
		</div>
	</div>
	</section>
    
   
    

     <!-- Footer Start -->
    <?php include 'D:\W-3-Schools\php--\php-ool\htdocs\progge\Footer.php'?>
    <!-- Footer End -->
            
</body>
</html>